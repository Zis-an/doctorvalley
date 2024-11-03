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
    bindNiceSelect("normal-select-2", {
        searchable: true,
        placeholder: 'Select Institute'
    });

    bindNiceSelect("selectinstitute", {
        searchable: true,
        placeholder: 'Select Institute'
    });

    bindNiceSelect("province_id", {
        searchable: true,
    });
    bindNiceSelect("city_id", {
        searchable: true,
    });
    bindNiceSelect("area_id", {
        searchable: true,
    });
    bindNiceSelect("specialities", {
        searchable: true,
    });
});
