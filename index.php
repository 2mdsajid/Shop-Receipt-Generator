<!DOCTYPE html>
<html>
				

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entry</title>
  <script src="jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style type="text/css" media="all">
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
    .cont{
      width: 90vw;
      min-height: 200px;
      border: solid 1px #131416;
      margin: 100px auto;
      padding: 0 5px;
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    h2{
      margin: 3px 0;
    }
    .user-select{
      margin-bottom: 5px;
    }
    .info-entry{
      width: 90%;
    }
    .info-entry input,.product-entry input{
      width: 100%;
      height: 35px;
      margin: 5px 0;
      padding: 0 0 0 3px;
    }
    h3{
      text-decoration: underline;
      margin: 5px 0;
    }
    .info-display{
      width: 90%;
      border: solid 1px #131416;
      margin: 5px 0;
      padding: 0 5px;
    }
    .line{
      width:102%;
      border: solid 1px #131416;
    }
    .product-entry{
      width: 90%;
      margin-bottom:5px;
    }
    
    .product-entry button{
      width: 35%;
      height: 35px;
      font-size: 1.1rem;
    }
    
    .product-display{
      width: 100%;
      display: flex;
      justify-content: space-evenly;
    }
    
    .under{
      text-decoration: underline;
    }
    
    .warn{
    color:red;
    }
    
  </style>
</head>

<body>
<div class="cont">  
  <div class="user-select">
    <h2>Select User Type</h2>
    <input type="radio" id="new" name="userSelect" value="new">
    <label for="new">New User</label>
    <input type="radio" id="old" name="userSelect" value="old">
    <label for="old">Old User</label><br>
  </div>
 
  
  <div class="info-entry">
  				
    <input class="userId" type="number" name="userId" placeholder="User Id"/>
    <p class="warn"></p>
    <div class="new-user-info">
    <input class="name" type="text" name="name" placeholder="Name" />
    <input class="address" type="text" name="address" placeholder="Address" />
    <input class="phone" type="number" name="phone" placeholder="Phone"  />
    </div>
    <input class="info-submit" type="submit" value="Confirm" />
  
  </div>
  
  <div class="info-display">
    <h3>User Info</h3>
    <p>User Id : <span class="userId-display"></span></p>
    <p>Name : <span class="name-display"></span></p>
    <p>Address : <span class="address-display"></span></p>
    <p>Phone : <span class="phone-display"></span></p>
    <h3>Items Added</h3>
    <div class="product-display">
    				
      <div class="p-code">
        <p class="under ">Code</p>
   
      </div>
      <div class="p-name">
        <p class="under ">Name</p>
   
      </div>
      <div class="p-price">
        <p class="under ">Price</p>
   
      </div>
      <div class="p-qty">
        <p class="under">Quantity</p>
    
      </div>
    </div>
  </div>
  
  <div class="line"></div>
  
  <div class="product-entry">
    <input class="product" type="text" name="product" placeholder="Product"/>
    <input class="qty" type="number" name="qty" placeholder="Quantity"/>
    
    <button class="product-add" type="submit">Add</button>
    <button class="product-confirm" type="submit">Confirm</button>
    
  </div>
  <p id="load"></p>
  <p id="l2"></p>
  </div>
  
  <script type="text/javascript" charset="utf-8">
  function addZero(string){
    if (string.length==1){
      string = '0'+string
      return string
    } return string
  }
 
  function getUserId(invoiceNum){
    let d = new Date()
    day = d.getDate()
    month = d.getMonth()+1
    return addZero(month.toString())+addZero(day.toString())+addZero(invoiceNum.toString())
  }
  
  $('.line').hide(10)
  $('.info-entry').slideUp(10)
 $('.info-display').slideUp(10)
 $('.product-entry').hide(10)
 
 
    let inputs = $('input[type=radio]')
    $('input[type=radio]').on('change', () => {
      $('.info-entry').slideDown(10)
      for (input of inputs) {
        if (input.checked) {
          userState = $(input).val()
          
          if (userState=='new'){
            $('.userId').hide(10)
            $('.new-user-info').show(10)
          } else {
            $('.new-user-info').hide(10)
            $('.userId').show(10)
          }
        }
      }
    })
    
    userInfo = []
    
    $.ajax({
    				type    : 'POST',
    				url     : 'user-id.php',
    				data    : {name:"dummy"},
    				success : function(response) {
    								receiptNum = response
												}
    					})
   
    $('.info-submit').on('click',()=> {
    
    $('input').attr({
        'autocomplete': 'none',
        'autocapitalize': 'off'
      })
  
      if (userState == 'new'){
      
       let name = $('.name').val()
       let address = $('.address').val()
       let phone = $('.phone').val()
       
       

								let userId = getUserId(receiptNum)
       
       userInfo = [userId,name,address,phone,receiptNum]
       
					  $('.userId-display').text(userInfo[0])
      $('.name-display').text(userInfo[1])
      $('.address-display').text(userInfo[2])
      $('.phone-display').text(userInfo[3])
											
											
											$('.info-display').slideDown(10)
      $('.info-entry').slideUp(10)
      $('.product-display').slideUp(10)
      $('.user-select').slideUp(10)
      
      $('.line').show()
      $('.product-entry').show(10)

      } else {
        let userId = $('.userId').val()
        
        $.ajax({
    				type    : 'POST',
    				url     : 'old-user.php',
    				data    : {result:userId},
    				success : function(response) {
    				
    				resp = response
      
      		if (resp == "errr"){
  								$(".warn").text("No user found")
  								} else {
  								obj = JSON.parse(response)
    				
    				let name = obj.name
       let address = obj.address
       let phone = obj.phone
      
       userInfo = [userId,name,address,phone,receiptNum]
       
       $('.userId-display').text(userId)
      $('.name-display').text(name)
      $('.address-display').text(address)
      $('.phone-display').text(phone)

      $('.info-display').slideDown(10)
      $('.info-entry').slideUp(10)
      $('.product-display').slideUp(10)
      $('.user-select').slideUp(10)
      
      $('.line').show()
      $('.product-entry').show(10)
    				}
      
    }
    })      
  }
  
    })

    
    pcodes = []
    pqtys = []
    pnames =[]
    pprices =[]
    
    $('.product-add').on('click',()=>{
    $('.product-display').slideDown(10)
      pcode = $('.product').val()
      pqty = $('.qty').val()
      if (pcode && pqty){
      pcodes.push(pcode)
      pqtys.push(pqty)
      
      $('.p-code').append(`<p>${pcode}</p>`)
      $('.p-qty').append(`<p>${pqty}</p>`)
      
      $('.product').val('')
      $('.qty').val('')
      
      $('.product').focus()
      
      $.ajax({
    				type    : 'POST',
    				url     : 'get-price.php',
    				data    : {code:pcode},
    				success : function(response) {
    				 obj2 = JSON.parse(response)
    				    let pname = obj2.name
    								let pprice = obj2.price
    								pnames.push(pname)
    								pprices.push(pprice)
    								$('.p-name').append(`<p>${pname}</p>`)
    								$('.p-price').append(`<p>${pprice}</p>`)
    				}
    				})
     
      }
    })
    
    
    $('.product-confirm').on('click',()=>{
      console.log(pcodes,pqtys)
      $('.product-entry').hide(10)
      $('.line').hide(10)
 
 //$("#load").text(userInfo[1])
      

      var stuffs = {
      				"info":userInfo,
      				"codes":pcodes,
      				"qtys":pqtys
      }
      
      $.ajax({
    type    : 'POST',
    url     : 'update-user.php',
    data    : {data:JSON.stringify(stuffs)},
    success : function(response) {
        $("#load").text(response)
    }    
});

let arr = {
      'info': userInfo,
      'codes': pcodes,
      'qtys': pqtys,
      'prices': pprices,
      'names':pnames
    }
    

      sessionStorage.setItem('array', JSON.stringify(arr))
      window.location.href = 'index2.php'

    })
    
  </script>
</body>

</html>
