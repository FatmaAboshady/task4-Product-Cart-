
function displayProducts() {
    var trs = "";
  
    for (var i = 0; i < productsList.length; i++) {
      console.log(productsList[i].productName);
  
      var x = productsList[i];
  
      trs += `<tr>
           
      <td>${i}</td>
      <td>${x.productName}</td>
      <td>${productsList[i].productCat}</td>
      <td>${x.productPrice}</td>
      <td>${productsList[i].productDesc}</td>
     
      <td><button class="btn btn-warning"><i class="fas fa-edit"></i></button></td>
      <td> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
    </tr>`;
    }
  
    console.log(trs);
  
    tbody.innerHTML = trs;
  }
  