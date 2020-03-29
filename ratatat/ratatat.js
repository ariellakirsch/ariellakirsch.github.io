var cards = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "9", "9", "9", "9", "9", "Draw 2", "Draw 2", "Draw 2", "Peek", "Peek", "Peek", "Swap", "Swap", "Swap"];
var deck = new Array();

function getDeck()
{
  var deck = new Array();

  for(var x = 0; x < cards.length; x++)
  {
    var card = {Value: cards[x]};
    deck.push(card);
  }

  return deck;
}

function shuffle()
{
  deck = getDeck();

  var seed = document.getElementById('gameID').value;
  Math.seedrandom(seed);
  console.log("shuffle seed is "+seed);
  console.log("first value is " + Math.random());

  // for 1000 turns
  // switch the values of two random cards
  for (var i = 0; i < 10000; i++)
  {
    var location1 = Math.floor(Math.random() * deck.length);
    var location2 = Math.floor(Math.random() * deck.length);
    var tmp = deck[location1];

    console.log(location1+" "+location2);

    deck[location1] = deck[location2];
    deck[location2] = tmp;
  }

  renderDeck();
}

function renderDeck()
{
  document.getElementById('deck').innerHTML = '';
  for(var i = 0; i < deck.length; i++)
  {
    var card = document.createElement("div");
    var value = document.createElement("div");
    card.className = "card";
    value.className = "value";

    value.innerHTML = deck[i].Value;
    card.appendChild(value);

    document.getElementById("deck").appendChild(card);
  }
}

function load()
{
  shuffle();
  renderDeck();
}

window.onload = load;
