@include('head/head')

@include('components/navbar')

@include('components/cart')

<script type="text/javascript">

    function aUserIsLogged()
    {
     if(!'{{session()->has("user")}}')
     {
        return false;
     }
     return true;
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
        var userCart = JSON.parse(sessionStorage.getItem("userCart"));
        sessionStorage.setItem('mainCart', JSON.stringify(userCart));
        sessionStorage.setItem('userCart', JSON.stringify(userCart));
        // console.log( JSON.parse(sessionStorage.getItem("mainCart")));
    }
    
    function makeCarts()
    {
        sessionStorage.setItem('mainCart', JSON.stringify([]));
        sessionStorage.setItem('userCart', JSON.stringify([]));
        sessionStorage.setItem('guestCart', JSON.stringify([]));
    }
    
    function setGuestCartToMainCart()
    {
        var guestCart = JSON.parse(sessionStorage.getItem("guestCart"));
        sessionStorage.setItem('mainCart', JSON.stringify(guestCart));
        sessionStorage.setItem('guestCart', JSON.stringify(guestCart));
    }
    
    
    //3 carts de mainCart de userCart en guestCart
       if(aUserIsLogged())
       {
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
                var userCart = JSON.parse(sessionStorage.getItem("userCart"));
                userCart.push(1);
                sessionStorage.setItem('userCart', JSON.stringify(userCart));
                setUserCartToMainCart();
                console.log('User: ' + sessionStorage.getItem("userCart"));
            } else {
                var guestCart = JSON.parse(sessionStorage.getItem("guestCart"));
                guestCart.push(1);
                sessionStorage.setItem('guestCart', JSON.stringify(guestCart));
                setGuestCartToMainCart();
                console.log('Guest: ' + sessionStorage.getItem("guestCart"));
            }
            maincart = JSON.parse(sessionStorage.getItem('mainCart'));
            document.getElementById("cartvalue").innerText = maincart.length;
        }
    
    </script>