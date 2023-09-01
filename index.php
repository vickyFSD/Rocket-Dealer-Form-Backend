
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dealer's Details jaga</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body >
    <div class="container m-auto main">
    <h3 class="text-center mt-5 mb-5">Dealer's Zone</h3>

    <form>
      <div class="row">
        <div class="col-6">
          <div class="mb-3 row">
            <label for="name" class="col-sm-3 col-form-label">Name:</label>
            <div class="col-sm-9 curve">
              <input type="text" name="name" class="form-control" id="name" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="address" class="col-sm-3 col-form-label"
              >Address:</label
            >
            <div class="col-sm-9">
              <textarea
                class="form-control"
                name="addresss"
                id="address"
                cols="5"
                rows="5"
              ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="phone_no" class="col-sm-3 col-form-label"
              >Phone No:</label
            >
            <div class="col-sm-9">
              <input
                type="text"
                name="phone_no"
                class="form-control"
                id="phone_no"
              />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
            <div class="col-sm-9">
              <input type="text" name="email" class="form-control" id="email" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="gst_no" class="col-sm-3 col-form-label">GST No:</label>
            <div class="col-sm-9">
              <input
                type="text"
                name="gst_no"
                class="form-control"
                id="gst_no"
              />
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="bg-white p-3">
            <select class="form-control mb-3" name="category" id="category" title = "Select Category">
            <option>Select Category</option>
          
  
             
 </select>

            <select class="form-control mb-3" name="productList" id="productList">
             <option> --: Select Product :--</option>
            </select>
            <div class="row">
            <div class="col">
               <input class="form-control quantity" type="number" name="quantity" placeholder="Quantity" >
            </div>
            <div class="col">
           <button class="form-control">Add Product</button>
            </div>
        </div>
    </div>
        <div class="show_table mt-3">
            <table class="table bg-white text-centergitgit">
                <thead>
                    <tr>
                      <th scope="col">Sr. No.</th>
                      <th scope="col">Category</th>
                      <th scope="col">Products</th>
                      <th scope="col">Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td colspan="2"></td>
                      <td></td>
                    </tr>
                  </tbody>
              </table>
        </div>
          
        </div>
      </div>
      <div class="text-center">
        <button type="submit"  id="save-button " class="btn my-5 ps-4 pe-4 submit_btn" onclick="submitForm();">Submit</button>  
      </div>
    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$(document).ready(function(){
function loadData(type,category_id){
  $.ajax({
url : "connect.php",
type : "POST",
data : {type : type, id : category_id},
success : function(data){
  if(type == "productData"){
    $("#table_data").html(data);
//  $("#productList").html(data);
  }else {
    $("#category").append(data);

  }
}

  });
}

loadData();

$("#category").on("change",function(){
var category = $("#category").val();
if(category!= ""){
  loadData("productData", category);

}
else {
  $("#productList").html("");
}

})


//inserting delear details

// $("#save-button").on("click",function(e){
//   e.preventDefault();
//   var name = $("#name").val();
//   var address = $("#address").val();
//   var phone_no = $("#phone_no").val();
//   var email = $("#email").val();
//   var gst_no = $("#gst_no").val();
  
//   $.ajax({
//    url: "connect.php",
//    type: "POST",
//    data : {name:name, address:address, phone_no:phone_no, email:email, gst_no:gst_no },
//    success: function(details_data){
//  loadData();
//    }
//   }

//   );
// })
//});


// function category(data){

//   alert('data');
//   const ajaxreq = new XMLHttpRequest();
//   ajaxreq.open('GET', 'http://localhost/rocket_dealer_form/connect.php?selectvalue='+data,'TRUE');
//   ajaxreq.send();

//   ajaxreq.onreadystatechange = function(){
//     if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
// document.getElementById('productList').innerHtml = ajaxreq.responseText;
//     }
//   }
// }

// $(document).ready(function(){
//   $('[data-toggle="tooltip"]').tooltip();

// }); -->
  
  </script>
  </body>
  
  
</html>