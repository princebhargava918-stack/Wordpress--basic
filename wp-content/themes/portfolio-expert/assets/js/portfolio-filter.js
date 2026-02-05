jQuery(document).ready(function($) {
    $('input[name="industry"], input[name="technology"]').change(function() {
        var industry = $('input[name="industry"]:checked').val();
        var technology = $('input[name="technology"]:checked').val();

        $.ajax({
            type: 'POST',
            url: portfolio_ajax.ajaxurl,
            data: {
                action: 'filter_portfolio',
                industry: industry,
                technology: technology
            },
            success: function(response) {
                $('#portfolio-results').html(response);
            }
        });
    });
});
