window.addEventListener('load', registerEvents,false);

var theCountApple = 1;
var theCountAvocado = 1;
var theCountBanana = 1;
var theCountStrawberry = 1;
var theCountMelon = 1;
var theCountMango = 1;


function registerEvents(a) {
  document.getElementById("incrementButtonApple").addEventListener('click', increaseCountApple,false);
  document.getElementById("decrementButtonApple").addEventListener('click', decreaseCountApple,false);
	document.getElementById("incrementButtonAvocado").addEventListener('click', increaseCountAvocado,false);
  document.getElementById("decrementButtonAvocado").addEventListener('click', decreaseCountAvocado,false);
	document.getElementById("incrementButtonBanana").addEventListener('click', increaseCountBanana,false);
  document.getElementById("decrementButtonBanana").addEventListener('click', decreaseCountBanana,false);
	document.getElementById("incrementButtonStrawberry").addEventListener('click', increaseCountStrawberry,false);
  document.getElementById("decrementButtonStrawberry").addEventListener('click', decreaseCountStrawberry,false);
	document.getElementById("incrementButtonMelon").addEventListener('click', increaseCountMelon,false);
  document.getElementById("decrementButtonMelon").addEventListener('click', decreaseCountMelon,false);
	document.getElementById("incrementButtonMango").addEventListener('click', increaseCountMango,false);
  document.getElementById("decrementButtonMango").addEventListener('click', decreaseCountMango,false);
}

function increaseCountApple(a) {
  theCountApple++;
  document.getElementById("currentCountApple").innerHTML = theCountApple;

}

function decreaseCountApple(a) {
if (theCountApple > 0) {
  theCountApple--;
}
      document.getElementById("currentCountApple").innerHTML = theCountApple;

}

// Countup and Countdown Functions for Avocado


function increaseCountAvocado(b) {
  theCountAvocado++;
  document.getElementById("currentCountAvocado").innerHTML = theCountAvocado;

}

function decreaseCountAvocado(b) {
if (theCountAvocado > 0) {
  theCountAvocado--;
}
      document.getElementById("currentCountAvocado").innerHTML = theCountAvocado;

}

// Countup and Countdown Functions for Banana

function increaseCountBanana(c) {
  theCountBanana++;
  document.getElementById("currentCountBanana").innerHTML = theCountBanana;

}

function decreaseCountBanana(c) {
if (theCountBanana > 0) {
  theCountBanana--;
}
      document.getElementById("currentCountBanana").innerHTML = theCountBanana;

}

// Countup and Countdown Functions for Strawberry

function increaseCountStrawberry(d) {
  theCountStrawberry++;
  document.getElementById("currentCountStrawberry").innerHTML = theCountStrawberry;

}

function decreaseCountStrawberry(d) {
if (theCountStrawberry > 0) {
  theCountStrawberry--;
}
      document.getElementById("currentCountStrawberry").innerHTML = theCountStrawberry;

}

// Countup and Countdown Functions for Melon

function increaseCountMelon(e) {
  theCountMelon++;
  document.getElementById("currentCountMelon").innerHTML = theCountMelon;

}

function decreaseCountMelon(e) {
if (theCountMelon > 0) {
  theCountMelon--;
}
      document.getElementById("currentCountMelon").innerHTML = theCountMelon;

}

// Countup and Countdown Functions for Mango

function increaseCountMango(f) {
  theCountMango++;
  document.getElementById("currentCountMango").innerHTML = theCountMango;

}

function decreaseCountMango(f) {
if (theCountMango > 0) {
  theCountMango--;
}
      document.getElementById("currentCountMango").innerHTML = theCountMango;

}

// Basket code that adds the cost of each fruit in real-time

var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];

  // Constructor
  function Item(name, price, count) {
    this.name = name;
    this.price = price;
    this.count = count;
  }

  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }

    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }


  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};

  // Add to cart
  obj.addItemToCart = function(name, price, count) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// *****************************************
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(name, price, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>"
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      + " = "
      + "<td>" + cartArray[i].total + "</td>"
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});

displayCart();


$(document).ready(function(){
   $(".add-to-cart").click(function(event){
     $(".fa-shopping-basket").show();
   });
 });

 $(document).ready(function(){
    $(".clear-cart").click(function(event){
      $(".fa-shopping-basket").hide();
    });
  });
