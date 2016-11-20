 $.typeahead({
    input: '.js-typeahead-country_v2',
    minLength: 1,
    maxItem: 20,
    order: "asc",
    href: "https://en.wikipedia.org/?title={{display}}",
    template: "{{display}} <small style='color:#999;'>{{group}}</small>",
    source: {
        country: {
            ajax: {
                url: "/test",
                path: "data.country"
            }
        },
        capital: {
            ajax: {
                type: "POST",
                url: "/test",
                path: "data.capital",
                data: {myKey: "myValue"}
            }
        }
    },
    callback: {
        onNavigateAfter: function (node, lis, a, item, query, event) {
            if (~[38,40].indexOf(event.keyCode)) {
                var resultList = node.closest("form").find("ul.typeahead__list"),
                    activeLi = lis.filter("li.active"),
                    offsetTop = activeLi[0] && activeLi[0].offsetTop - (resultList.height() / 2) || 0;
 
                resultList.scrollTop(offsetTop);
            }
 
        },
        onClickAfter: function (node, a, item, event) {
 
            event.preventDefault();
 
            var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
            if (r == true) {
                window.open(item.href);
            }
 
            $('#result-container').text('');
 
        },
        onResult: function (node, query, result, resultCount) {
            if (query === "") return;
 
            var text = "";
            if (result.length > 0 && result.length < resultCount) {
                text = "Showing <strong>" + result.length + "</strong> of <strong>" + resultCount + '</strong> elements matching "' + query + '"';
            } else if (result.length > 0) {
                text = 'Showing <strong>' + result.length + '</strong> elements matching "' + query + '"';
            } else {
                text = 'No results matching "' + query + '"';
            }
            $('#result-container').html(text);
 
        },
        onMouseEnter: function (node, a, item, event) {
 
            if (item.group === "country") {
                $(a).append('<span class="flag-chart flag-' + item.display.replace(' ', '-').toLowerCase() + '"></span>')
            }
 
        },
        onMouseLeave: function (node, a, item, event) {
 
            $(a).find('.flag-chart').remove();
 
        }
    }
});