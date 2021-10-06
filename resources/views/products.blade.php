@include('head/head')

@include('components/navbar')

@include('components/products')

<script type="text/javascript">

function aUserIsLogged()
{
 if(!'{{session()->has("user")}}')
 {
    return false;
 }
 return true;
}

function getUserId()
{
    if(aUserIsLogged() != false)
    {
        return '{{session()->get("id")}}';
    }
    return '';
}

function mainCartExists()
{
    if(sessionStorage.getItem('mainCart') == null)
    {
        return false;
    }
    return true;
}

function setUserCartToMainCart()
{
    var userCart = JSON.parse(sessionStorage.getItem("userCart" + getUserId()));
    console.log(userCart);
    sessionStorage.setItem('mainCart', JSON.stringify(userCart));
    sessionStorage.setItem('userCart' + getUserId(), JSON.stringify(userCart));
    // console.log( JSON.parse(sessionStorage.getItem("mainCart")));
}

function makeCarts()
{
    sessionStorage.setItem('mainCart', JSON.stringify([]));
    sessionStorage.setItem('userCart' + getUserId(), JSON.stringify([]));
    sessionStorage.setItem('guestCart', JSON.stringify([]));
}

function setGuestCartToMainCart()
{
    var guestCart = JSON.parse(sessionStorage.getItem("guestCart"));
    sessionStorage.setItem('mainCart', JSON.stringify(guestCart));
    sessionStorage.setItem('guestCart', JSON.stringify(guestCart));
}
function checkIfuserCartExists()
{
    if(sessionStorage.getItem('userCart' + getUserId()) == null)
    {
        sessionStorage.setItem('userCart' + getUserId(), JSON.stringify([]));
    } 
}


//3 carts de mainCart de userCart en guestCart
   if(aUserIsLogged())
   {
        checkIfuserCartExists();
        if(mainCartExists())
        {
            setUserCartToMainCart();
        }
        else {
            makeCarts();
        }
   }
   else {

        if(mainCartExists())
        {
            setGuestCartToMainCart();
        }
        else {
            makeCarts();
        }
   } 

   document.getElementById("cartvalue").innerText = JSON.parse(sessionStorage.getItem('mainCart')).length;


function save()
    {
        $.ajax({
               type:'POST',
               url:'/cart/' + sessionStorage.getItem('mainCart'),
               data: { 
                    _token:'{{ csrf_token() }}',
                    _method: 'PUT'
                },
                success: function(data){
                    window.location.href = '/cart'
                }
    });
    }


    function add()
    {
        if(aUserIsLogged())
        {
            var userCart = JSON.parse(sessionStorage.getItem("userCart" + getUserId()));
            userCart.push(1);
            console.log('User: ' + userCart);
            sessionStorage.setItem('userCart' + getUserId(), JSON.stringify(userCart));
            setUserCartToMainCart();
        } else {
            var guestCart = JSON.parse(sessionStorage.getItem("guestCart"));
            guestCart.push(1);
            sessionStorage.setItem('guestCart', JSON.stringify(guestCart));
            setGuestCartToMainCart();
        }
        maincart = JSON.parse(sessionStorage.getItem('mainCart'));
        document.getElementById("cartvalue").innerText = maincart.length;
    }

</script>