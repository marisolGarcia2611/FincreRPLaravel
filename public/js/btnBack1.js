const btnBack1 = document.querySelector('#btnBack');

btnBack1.innerHTML = `
<div class="pos__btnBack">
    <div class="wrapper"> 
      <h5 class="btnBack" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
    </div>
</div>
`