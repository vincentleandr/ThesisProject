/*jslint  browser: true, white: true, plusplus: true */
/*global $, usastates */

$(function () {
    'use strict';

    var majorArray = $.map(major, function (value, key) {
        return {value: value, data: key};
    });

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(majoArray, function (major) {
                    // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(major.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });


    // Initialize ajax autocomplete:
    $('#autocomplete-ajax2').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: majorArray,
        lookupFilter: function (suggestion, originalQuery, queryLowerCase) {
            var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
            return re.test(suggestion.value);
        },
        onSelect: function (suggestion) {
            $('#selction-ajax').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
        },
        onHint: function (hint) {
            $('#autocomplete-ajax-x').val(hint);

        },
        onInvalidateSelection: function () {
            $('#selction-ajax').html('You selected: none');
        }
    });
});




