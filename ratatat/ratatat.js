var cards = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "9", "9", "9", "9", "9", "D", "D", "D", "P", "P", "P", "S", "S", "S"];
var deck = new Array();

function random() {
    var x = Math.sin(seed++) * 10000;
    return x - Math.floor(x);
}

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
  var seed = document.getElementById('gameID').value;
  Math.seedrandom(seed);
  console.log("shuffle seed is "+seed);

  // for 1000 turns
  // switch the values of two random cards
  for (var i = 0; i < 1000; i++)
  {
    var location1 = Math.floor(Math.random() * deck.length);
    var location2 = Math.floor(Math.random() * deck.length);
    var tmp = deck[location1];

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
  deck = getDeck();
  shuffle();
  renderDeck();
}

window.onload = load;
