<?php

namespace App\Helpers\Core;

use App\Helpers\Util;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Throwable;

/**
 * Trait ResponseDecorator
 *
 * Provides common response handling functionalities, including JSON responses,
 * redirect responses, and exception handling with logging.
 */
trait ResponseDecorator
{
    /**
     * Generate a structured response array.
     *
     * @param mixed|null $data Data to include in the response.
     * @param string|null $message Optional message for the response.
     * @param bool $success Indicates if the response is successful.
     * @return array Structured response array.
     */
    private function createResponseArray(mixed $data = null, string $message = null, bool $success = true): array
    {
        return [
            'success' => $success,
            'message' => $message,
            'data' => $data,
        ];
    }

    /**
     * Return a JSON response.
     *
     * @param mixed|null $data Data to include in the response.
     * @param string|null $message Optional message for the response.
     * @param int $statusCode HTTP status code for the response.
     * @param array $headers Additional headers for the response.
     * @param int $options JSON encoding options.
     * @return JsonResponse JSON response.
     */
    public function jsonResponse(mixed $data = null, string $message = null, int $statusCode = 200, array $headers = [], int $options = 0): JsonResponse
    {
        $success = $statusCode >= 200 && $statusCode < 300;
        $responseArray = $this->createResponseArray($data, $message, $success);

        return response()->json($responseArray, $statusCode, $headers, $options);
    }

    /**
     * Return a success JSON response.
     *
     * @param mixed|null $data Data to include in the response.
     * @param string $message Message indicating successful operation.
     * @param array $headers Additional headers for the response.
     * @return JsonResponse JSON response.
     */
    public function successResponse(mixed $data = null, string $message = 'Operation successful', array $headers = []): JsonResponse
    {
        return $this->jsonResponse($data, $message, 200, $headers);
    }

    /**
     * Return an error JSON response.
     *
     * @param string $message Error message.
     * @param int $statusCode HTTP status code for the error.
     * @param mixed|null $data Optional data to include in the response.
     * @param array $headers Additional headers for the response.
     * @return JsonResponse JSON response.
     */
    public function errorResponse(string $message = 'An error occurred', int $statusCode = 400, mixed $data = null, array $headers = []): JsonResponse
    {
        return $this->jsonResponse($data, $message, $statusCode, $headers);
    }

    /**
     * Return a validation error JSON response.
     *
     * @param array $errors Validation errors array.
     * @param string $message Error message.
     * @return JsonResponse JSON response.
     */
    public function validationErrorResponse(array $errors, string $message = 'Validation failed'): JsonResponse
    {
        return $this->jsonResponse(['errors' => $errors], $message, 422);
    }

    /**
     * Handle an exception by logging and JSON response.
     *
     * @param Throwable|string $message
     * @param string $logContext Log context or tag.
     * @param int $code
     * @param array $headers Additional headers for the redirect.
     * @return JsonResponse Redirect response or JSON response on failure.
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function errorResponseWithLog(
        Throwable|string $message,
        string $logContext = 'APPLICATION_ERROR',
        int $code = 400,
        array $headers = []
    ): JsonResponse {
        if ($message instanceof Throwable){
            Util::writeToLog($logContext,'error', $message->getMessage(), $message);
            $message = $message->getMessage();
        }
        return $this->jsonResponse([], $message, $code, $headers);
    }

    /**
     * Handle redirect responses with optional message and logging.
     *
     * @param RedirectResponse $redirect The redirect response object.
     * @param string|null $message Optional message to attach to the redirect.
     * @return RedirectResponse Modified redirect response.
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    private function handleRedirectResponse(
        RedirectResponse $redirect,
        string $message = null,
        string $messageType = 'info',
        Throwable $exception=null,
        string $logContext = 'APPLICATION_ERROR'
    ): RedirectResponse
    {
        if ($exception instanceof Throwable){
            Util::writeToLog($logContext,'error', $exception->getMessage(), [
                'exception' => $exception,
            ]);
        }

        if ($message) {
            if ($messageType !== 'success'){
                $message = $message . '[REQ_TXN_ID]:' . request()->get('request_id');
            }
            $redirect->with($messageType, $message);
        }

        return $redirect;
    }

    /**
     * Return a redirect response to another route, with logging and exception handling.
     *
     * @param string $route The route name to redirect to.
     * @param array $parameters Route parameters.
     * @param string|null $message Optional message for the redirect.
     * @param int $statusCode HTTP status code for the redirect.
     * @param array $headers Additional headers for the redirect.
     * @return RedirectResponse|JsonResponse Redirect response or JSON response on failure.
     */
    public function redirectToRoute(
        string $route,
        array $parameters = [],
        string $message = null,
        string $messageType = 'info',
        int $statusCode = 302,
        array $headers = []
    ): RedirectResponse|JsonResponse
    {
        try {
            $redirect = redirect()->route($route, $parameters, $statusCode, $headers);
            return $this->handleRedirectResponse($redirect, $message, $messageType);
        } catch (Throwable $e) {
            Log::error('Redirect to route failed: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Return a redirect back response, with logging and exception handling.
     *
     * @param string|null $message Optional message for the redirect.
     * @param int $statusCode HTTP status code for the redirect.
     * @param array $headers Additional headers for the redirect.
     * @return RedirectResponse|JsonResponse Redirect response or JSON response on failure.
     */
    public function redirectBack(
        string $message = null,
        string $messageType = 'info',
        int $statusCode = 302,
        array $headers = []
    ): RedirectResponse|JsonResponse
    {
        try {
            $redirect = redirect()->back($statusCode, $headers);
            return $this->handleRedirectResponse($redirect, $message, $messageType);
        } catch (Throwable $e) {
            Log::error('Redirect back failed: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Handle an exception by logging and redirecting.
     *
     * @param Throwable $exception The caught exception.
     * @param string $logContext Log context or tag.
     * @param string $redirectRoute Route name or 'back' for redirect.
     * @param string|null $redirectMessage Optional redirect message.
     * @param int $code
     * @param array $parameters Route parameters for redirect.
     * @param array $headers Additional headers for the redirect.
     * @return RedirectResponse|JsonResponse Redirect response or JSON response on failure.
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function redirectWithExceptionLog(
        Throwable $exception,
        string $logContext = 'APPLICATION_ERROR',
        string $redirectRoute = 'back',
        string $redirectMessage = null,
        int $code = 302,
        array $parameters = [],
        array $headers = []
    ): RedirectResponse|JsonResponse {
        $message = $redirectMessage ?? 'Something went wrong. Please try again';
        if (empty($redirectMessage)){
            $message = $exception->getMessage();
        }

        // Redirect back or to a specific route based on the given route name
        if ($redirectRoute === 'back') {
            $redirect = redirect()->back($code, $headers)->withInput();
        }else{
            $redirect = redirect()->route($redirectRoute, $parameters, $code, $headers)->withInput();
        }
        return $this->handleRedirectResponse($redirect, $message, 'error', $exception, $logContext);
    }
}
