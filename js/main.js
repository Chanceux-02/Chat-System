$(document).ready(function() {
    // Set the interval for fetching the data in milliseconds
    var interval = 50; // 5 seconds

    // Define the function that fetches the data
    function fetchData() {
        $.ajax({
            url: '../fetch.php',
            type: 'GET',
            success: function(data) {
                // Update the HTML element with the fetched data
                $('#result').html(data);
                $('#result').scrollTop($('#result')[0].scrollHeight);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }

    // Call the function to fetch the data at the specified interval
    setInterval(fetchData, interval);
});