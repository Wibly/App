$(document).ready(function() {
  // if (sessionStorage.getItem('splashScreen') !== 'true') {
  var quote = "What can you do, the man is a god!";
  var author = "Emil Hoffman";

  var quotes = [{
    quote: "citat 1",
    author: "author 1"
  },
  {
    quote: "citat 2",
    author: "author 2"
  },
  {
    quote: "citat 3",
    author: "author 3"
  }
];
  var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>')
    $('blockquote').prepend('<p id="quote">What can you do, the man is a god!</p>');
    $('blockquote').append('<footer id="author">Emil Hoffman</footer>');
    $('#quote').html(randomQuote.quote);
    $('#author').html(randomQuote.author);
    // $("#splashScreen").show().delay(2500).fadeOut();
    sessionStorage.setItem('splashScreen', 'true');

    // var myArray = ['Ebin', 'Joo', 'Bulla'];
    // var rand = myArray[Math.floor(Math.random() * myArray.length)];
    // document.getElementById("p1").innerHTML = rand;
  // }
});