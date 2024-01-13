$(document).ready(function() {
    $('.increment-btn').click(function(e) {
        e.preventDefault();

        var productData = $(this).closest('.product_data');

        var qtyInput = productData.find('.input-qty');

        var qty = qtyInput.val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;

        if (value < 10) {
            value++;
            qtyInput.val(value);
        }
    });
    $('.decrement-btn').click(function(e){
        e.preventDefault();
    
            var productData = $(this).closest('.product_data');
    
            var qtyInput = productData.find('.input-qty');
    
            var qty = qtyInput.val();
            var value = parseInt(qty, 10);
            value = isNaN(value) ? 0 : value;
    
            if (value > 1) {
                value--;
                qtyInput.val(value);
            }
    });
});
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}
//thông báo bỏ thích
const toastTrigger2 = document.getElementById('liveToastBtn2')
const toastLiveExample2 = document.getElementById('liveToast2')

if (toastTrigger2) {
  const toastBootstrap1 = bootstrap.Toast.getOrCreateInstance(toastLiveExample2)
  toastTrigger2.addEventListener('click', () => {
    toastBootstrap1.show()
  })
}



