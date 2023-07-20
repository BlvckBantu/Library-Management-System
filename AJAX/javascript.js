$.ajax({
    url: 'get_books.php',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      var books = data;
      var tableBody = $('#books-body');
      for (var i = 0; i < books.length; i++) {
        var book = books[i];
        var tableRow = $('<tr>');
        tableRow.append($('<td>').text(book.id));
        tableRow.append($('<td>').text(book.title));
        tableRow.append($('<td>').text(book.author));
        tableRow.append($('<td>').text(book.subject));
        tableBody.append(tableRow);
      }
    }
  });
  