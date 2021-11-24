<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bill</title>
  <script src="jquery.js" type="text/javascript" charset="utf-8"></script><script src="Scripts/jquer_latest_2.11_.min.js" type="text/javascript"></script>
<script src="html2canvas.js" type="text/javascript"></script>
  <style type="text/css" media="all">
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-size: 17px;
    }

    .cont {
      height: 80vh;
      width: 98vw;
      border: solid 1px #42445A;
      margin: 15px auto;
      display: flex;
      flex-direction: column;
      padding: 3px;
      background-image: url("bg.jpg");
    }


    .title {
      height: 10%;
      margin-bottom: 5px;
    }

    h1 {
      text-align: center;
    }

    .title h1 {
      color: #3B45B3;
    }

    .title p {
      text-align: center;
      font-size: .6rem;
    }


    .head {
      border: solid 0px #42445A;
      padding: 0 3px;
      margin-bottom: 5px;
    }

    .head h1,
    p {
      font-size: .65rem;
    }

    .head h1 {
      margin-bottom: 5px;
      text-decoration: underline;

    }

    .head span,
    .entry,
    .word {
      font-size: .7rem;
      font-weight: bold;
    }

    .sn-date {
      display: flex;
    }

    .sn-date p {
      width: 50%;
    }

    .info {
      display: flex;
      flex-direction: column;
    }

    .info p {
      width: 100%;
    }

    .contact {
      display: flex;
    }

    .table {
      height: 50%;
      display: flex;
      border: solid 1px #000000;
      border-right: solid 0px #000000;
    }

    .table div {
      height: 100%;
      border-right: solid 1px #000000;
    }

    .table div p {
      font-size: .65rem;
      text-align: center;
      border-bottom: solid 1px #000000;
    }

    .sn {
      width: 5%;
    }

    .code {
      width: 20%;
    }

    .desc {
      width: 40%;
    }

    .qty {
      width: 10%;
    }

    .rate {
      width: 10%;
    }

    .amt {
      width: 15%;
    }

    .table-foot {
      border: solid #000000;
      width: 35%;
      background: #0000001F;
      display: flex;
      flex-direction: column;
      position: relative;
      left: 65%;
      margin-bottom: 5px;
      border-width: 0px 1px;
    }

    .table-foot div {
      width: 100%;
      display: flex;
    }

    .table-foot div p {
      padding: 0 3px;
      font-size: .65rem;
      border-bottom: solid 1px #000000;
    }

    .label {
      border-right: solid 1px #000000;
      width: 57%;
    }

    .val {
      text-align: center;
      width: 43%;
    }


    .for-word {
      height: 5%;
      border: solid 1px #000000;
    }

    .for-word p {
      font-size: .65rem;
      padding-left: 3px;
    }

    .sign {
      max-width: 25%;
      text-align: center;
      position: relative;
      top: 4%;
      left: 75%;
      font-size: .60rem;

    }

    li {
      font-size: .6rem;
    }

    .foot {
      border-top: solid 1px #42445A;
      padding: 3px 0 3px 15px;
    }
  </style>
</head>

<body>
  <div class="cont">
    <div class="title">
      <h1>New Purse House</h1>
      <p>Sadar Bazaar, New Delhi</p>
      <p>Phone : +91-9988776655, +91-9876543216</p>
      <p>newpursehouse@xyz.com, www.newpursehouse.com</p>
    </div>
    <div class="head">
      <h1>RECEIPT</h1>
      <div class="sn-date">
        <p>Receipt No. : <span class="receip-num">0001</span></p>
        <p>Date : <span class="date">09-09-2021</span></p>
      </div>
      <div class="info">
        <p>User Id : <span class="userId">097817</span></p>
        <p>Name : <span class="name">Sajid Aalam</span></p>
        <div class="contact">
          <p>Address : <span class="address">Delhi,India</span></p>
          <p>Phone : <span class="phone">+919876666666</span></p>
        </div>
      </div>
    </div>
    <div class="table">
      <div class="sn">
        <p>SN</p>
      </div>
      <div class="code">
        <p>Code No.</p>
      
      </div>
      <div class="desc">
        <p>Description</p>
       
      </div>
      <div class="qty">
        <p>Qty.</p>
       
      </div>
      <div class="rate">
        <p>Rate</p>
       
      </div>
      <div class="amt">
        <p>Amount</p>
        
      </div>
    </div>
    <div class="table-foot">
      <div class="for-total">
        <p class="label">Total</p>
        <p class="val total">1000</p>
      </div>
      <div class="for-disc">
        <p class="label">Discount</p>
        <p class="val disc">0%</p>
      </div>
      <div class="for-grand">
        <p class="label">Grand Total</p>
        <p class="val grand">1000</p>
      </div>
    </div>
    <div class="for-word">
      <p>In Words : <span class="word">One thousand only</span></p>
    </div>
    <p class="sign">Signature</p>
    <br><br>
    <div class="foot">
      <ul>
        <li>Thanks for visiting.</li>
        <li>Bring this receipt next time to get a discount of 5%. </li>
      </ul>
    </div>
    
  </div>
  <button type="submit">download</button>
  <div id="previewImg"></div>
  <script type="text/javascript" charset="utf-8">
  				
  				function toWords(number) {
      const first = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ', 'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
      const tens = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
      const mad = ['', 'thousand', 'million', 'billion', 'trillion'];
      let word = '';

      for (let i = 0; i < mad.length; i++) {
        let tempNumber = number % (100 * Math.pow(1000, i));
        if (Math.floor(tempNumber / Math.pow(1000, i)) !== 0) {
          if (Math.floor(tempNumber / Math.pow(1000, i)) < 20) {
            word = first[Math.floor(tempNumber / Math.pow(1000, i))] + mad[i] + ' ' + word;
          } else {
            word = tens[Math.floor(tempNumber / (10 * Math.pow(1000, i)))] + '-' + first[Math.floor(tempNumber / Math.pow(1000, i)) % 10] + mad[i] + ' ' + word;
          }
        }

        tempNumber = number % (Math.pow(1000, i + 1));
        if (Math.floor(tempNumber / (100 * Math.pow(1000, i))) !== 0) word = first[Math.floor(tempNumber / (100 * Math.pow(1000, i)))] + 'hunderd ' + word;
      }
      return word;
    }
  				
  				function addText(cls,text){
    $(`.${cls}`).text(text)
  }
  function appendText(parent,txt){
    let p = document.createElement('p')
    p.classList = 'entry'
    p.textContent = txt
    $(`.${parent}`).append(p)
  }
    string = sessionStorage.getItem('array')
    data = JSON.parse(string)
    //data=JSON.parse(localStorage.myArray)
    
    info = data.info
    
    addText('userId',info[0])
    addText('name',info[1])
    addText('address',info[2])
    addText('phone',info[3])
    addText('receip-num',info[4])
    
    sum = 0
    for (i=0;i<data["codes"].length;i++){
      appendText('sn',i+1)
      appendText('desc',data["names"][i])
      appendText('code',data["codes"][i])
      qty = data["qtys"][i]
      rate = data["prices"][i]
      amt = qty*rate
      sum+=amt
      appendText('qty',qty)
      appendText('rate',rate)
      appendText('amt',amt)
    }
    
    let disc = 10
    grand = sum-sum*disc/100
    
    addText('total',sum)
    addText('disc',disc)
    addText('grand',grand)
    var words = toWords(grand);
    addText('word', words)

    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if (dd < 10){
      dd = '0' + dd;
    }if (mm < 10){
      mm = '0' + mm;
    }
    today = mm + '-' + dd + '-' + yyyy;
    addText('date', today)
  document.querySelector("button").addEventListener("click", function() {
	html2canvas(document.querySelector(".cont")).then(function (canvas) {			var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			//document.getElementById("previewImg").appendChild(canvas);
			anchorTag.download = "filename.jpg";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
		});
 });
  </script>
  
  
</body>

</html>
