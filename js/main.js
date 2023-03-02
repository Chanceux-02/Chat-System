$(document).ready(function() { // making the script ready after the structure load
    // Set the interval for fetching the data in milliseconds
    var interval = 500; // 50 miliseconds

    // Define the function that fetches the data
    function fetchData() {
        $.ajax({
            url: '../ajax/fetch.php', //the file url
            type: 'GET', // the method
            success: function(data) { //if ajax is success then
                // Update the HTML element with the fetched data
                $('#result').html(data); //targeting the element where to update the data
                //$('#result').scrollTop($('#result')[0].scrollHeight); //to make the scroll from the bottom or the latest of the chat
            },
            error: function(jqXHR, textStatus, errorThrown) { // if ajax is not success
                console.log(textStatus, errorThrown);
            }
        });
    }

    // Call the function to fetch the data at the specified interval
    setInterval(fetchData, interval);

    function fetchPairData() {
        $.ajax({
            url: '../ajax/pair-chat.php', //the file url
            type: 'GET', // the method
            success: function(data) { //if ajax is success then
                // Update the HTML element with the fetched data
                $('#result2').html(data); //targeting the element where to update the data
                //$('#result').scrollTop($('#result')[0].scrollHeight); //to make the scroll from the bottom or the latest of the chat
            },
            error: function(jqXHR, textStatus, errorThrown) { // if ajax is not success
                console.log(textStatus, errorThrown);
            }
        });
    }

    // Call the function to fetch the data at the specified interval
    setInterval(fetchPairData, interval);
});