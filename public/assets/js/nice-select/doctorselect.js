document.addEventListener('DOMContentLoaded', function () {
    function bindNiceSelect(selector, options) {
        var element = document.getElementById(selector);
        if (element) {
            NiceSelect.bind(element, options);
        }
    }

    bindNiceSelect("divisions", {
        searchable: true,
        placeholder: 'Select Division'
    });

    bindNiceSelect("districts", {
        searchable: true,
        placeholder: 'Select District'
    });

    bindNiceSelect("thanas", {
        searchable: true,
        placeholder: 'Select Thana'
    });

    bindNiceSelect("normal-select-1", {
        searchable: true,
        placeholder: 'Select Degree'
    });

    bindNiceSelect("selectinstitute", {
        searchable: true,
        placeholder: 'Select Institute'
    });
});



// Previous codes generating error in the console

// NiceSelect.bind(document.getElementById("divisions"), {
//     searchable: true,
//     placeholder: 'Select Division'
// });

// NiceSelect.bind(document.getElementById("districts"), {
//     searchable: true,
//     placeholder: 'Select District'
// });

// NiceSelect.bind(document.getElementById("thanas"), {
//     searchable: true,
//     placeholder: 'Select Thana'
// });

// NiceSelect.bind(document.getElementById("normal-select-1"), {
//     searchable: true,
//     placeholder: 'Select Degree'
// });

// NiceSelect.bind(document.getElementById("selectinstitute"), {
//     searchable: true,
//     placeholder: 'Select Institute'
// });
