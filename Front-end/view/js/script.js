  // ************************************************
// Shopping Cart API
// ************************************************
$('.number').keydown(function(e) {
    if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 35 && event.keyCode <= 37) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 45 || event.keyCode == 8 ) return true;
    else return false;
});
// Color

function color(i){
  var checkbox = document.getElementsByClassName("color");
  var text = document.getElementById("addtocart");
    if (checkbox[i].checked == true){
      text.setAttribute('data-Color', checkbox[i].value);
    }
};

// Size
  function kichthuoc(i){
  var checkbox = document.getElementsByClassName("size");
  var text = document.getElementById("addtocart");
    if (checkbox[i].checked == true){
      text.setAttribute('data-kichthuoc', checkbox[i].value);
    }
};
// cart
var shoppingCart = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    cart = [];
    
    // Constructor
    function Item(id, name, price, count, img, color, kichthuoc) {
      this.id = id;
      this.name = name;
      this.price = price;
      this.count = count;
      this.img = img;
      this.color = color;
      this.kichthuoc = kichthuoc;
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
    obj.addItemToCart = function(id, name, price, count ,img, color, kichthuoc) {
      for(var item in cart) {
        if(cart[item].id === id  && cart[item].color === color && cart[item].kichthuoc === kichthuoc) {
          cart[item].count ++;
          saveCart();
          return;
        }
      }
      var item = new Item(id, name, price, count ,img, color, kichthuoc);
      cart.push(item);
      saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(id, count, color, kichthuoc) {
      for(var i in cart) {
        if (cart[i].id === id  && cart[item].color === color && cart[item].kichthuoc === kichthuoc) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(id) {
        for(var item in cart) {
          if(cart[item].id === id) {
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
    obj.removeItemFromCartAll = function(id) {
      for(var item in cart) {
        if(cart[item].id === id) {
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
    var id = $(this).data('id');
    var img = $(this).data('img');
    var name = String($(this).data('name'));
    var price = Number($(this).data('price'));
    var color = $(this).data('color');
    var kichthuoc = Number($(this).data('kichthuoc'));
    shoppingCart.addItemToCart(id, name, price,1, img, color, kichthuoc );
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
        + "<td class='product-th'><img src='" + cartArray[i].img + "'></td>"
        + "<td>" + cartArray[i].name + "</td>" 
        + "<td>(" + cartArray[i].price + ")</td>"
        + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-id=" + cartArray[i].id + ">-</button>"
        + "<input type='text' class='item-count number form-control' data-id='" + cartArray[i].id + "' value='" + cartArray[i].count + "'>"
        + "<button class='plus-item btn btn-primary input-group-addon' data-id=" + cartArray[i].id + ">+</button></div>"
        + "<button class='delete-item btn btn-danger' data-id=" + cartArray[i].id + ">X</button></<button></td>"
        + " = "
        + "<td>" + cartArray[i].color + "</td>"
        + "<td>" + cartArray[i].kichthuoc + "</td>"
        + "<td>" + cartArray[i].total + "</td>" 
        +  "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(shoppingCart.totalCart());
    $('.total-count').html(shoppingCart.totalCount());
  }
  
  // Delete item button
  
  $('.show-cart').on("click", ".delete-item", function(event) {
    var id = $(this).data('id')
    shoppingCart.removeItemFromCartAll(id);
    displayCart();
  })
  
  
  // -1
  $('.show-cart').on("click", ".minus-item", function(event) {
    var id = $(this).data('id')
    shoppingCart.removeItemFromCart(id);
    displayCart();
  })
  // +1
  $('.show-cart').on("click", ".plus-item", function(event) {
    var id = $(this).data('id')
    shoppingCart.addItemToCart(id);
    displayCart();
  })
  
  // Item count input
  $('.show-cart').on("change", ".item-count", function(event) {
     var id = $(this).data('id');
     var count = Number($(this).val());
    shoppingCart.setCountForItem(id, count);
    displayCart();
  });
  
  displayCart();
  
