
<?php $this->view('Layout/Header'); ?>
 <?php $this->view('Layout/Navigation'); ?>
 <br>
 <br>

   <link rel="stylesheet" href="/resources/styles/delivery.css">
<div class="container">
       <div style="height: 800px">
  <div class="card border-0 shadow my-5">
    <div class="card-header">
        <h3 class="text-center">schedule your delivery</h3>
    </div>
    <div class="card-body p-5">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
               <th>Farm Name</th>
               <th>delivery date</th>
               <th>delivery time</th>
               <th>estimated delivery time</th>
               <th>Action</th>
            </thead>
             <tbody>
               <tr>
                    <form class="form-inline">
                   <td><input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Queen Farm"></td>
                   <td> <input type="date" class="form-control"  ></td>
                   <td>
                       <input type="time" class="form-control" >
                   </td>
                   <td> <input type="time" class="form-control" ></td>
                   <td>
                     <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                  
                   </td>
    
             </tbody>
           </table>
         </div>
       </div>
      </div>
   </div>
</div>

  
        <?php $this->view('Layout/Scripts'); ?>
         <?php $this->view('Layout/Footer'); ?>