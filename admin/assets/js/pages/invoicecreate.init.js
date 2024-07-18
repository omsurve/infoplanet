
function new_link() {

    count = document.getElementsByClassName('product').length;
    count++;
    // alert(count);
    var e = document.createElement("tr");
    e.id = count, e.className = "product";
    var t = '<tr  class="product"><th scope="row" class="product-id">' + count + '</th>\n\
<td class="text-start">\n\
    <div class="mb-2">\n\
        <input class="form-control bg-light border-0" type="text" id="product-name-' + count + '" name="product_name[]" placeholder="Product Name" required>\n\
    </div>\n\
</td>\n\
<td>\n\
    <input class="form-control bg-light border-0 product-price" type="number"   data-id="' + count + '" id="product-price-' + count + '" name="product_rate[]" step="0.01" placeholder="0.00" required>\n\
</td>\n\
<td>\n\
    <div >\n\
        <input type="number" class="form-control bg-light border-0 product-quantity"  data-id="' + count + '" id="product-qty-' + count + '" name="product_qty[]" value="0" >\n\
    </div>\n\
</td>\n\
<td class="text-end">\n\
    <div>\n\
        <input type="text" class="form-control bg-light border-0  product-line-price product-amount"  data-id="' + count + '" id="product-amount-' + count + '" name="product_price[]" value="0.00" placeholder="0.00" />\n\
    </div>\n\
</td>\n\
<td class="product-removal">\n\
    <a class="btn btn-danger btn-sm mt-1">X</a>\n\
</td></tr>';

    e.innerHTML = document.getElementById("newForm").innerHTML + t;
    document.getElementById("newlink").appendChild(e);
    remove(), resetRow()

    $('#product-name-' + count).focus();
}
remove();


function remove() {
    document.querySelectorAll(".product-removal a").forEach(function (e) {
        e.addEventListener("click", function (e) {
            removeItem(e), resetRow()
        })
    })
}

function resetRow() {
    document.getElementById("newlink").querySelectorAll("tr").forEach(function (e, t) {
        t += 1;
        e.querySelector(".product-id").innerHTML = t;
        recalculateCart();
    })
}

function recalculateCart() {
    var t = 0;
    document.getElementsByClassName("product").forEach(function (e) {

        e.getElementsByClassName("product-amount").forEach(function (e) {

            e.value && (t += parseFloat(e.value));

        })
    });
    document.getElementById("cart-total").value = t.toFixed(2);

}




function removeItem(e) {
    e.target.closest("tr").remove()
}

