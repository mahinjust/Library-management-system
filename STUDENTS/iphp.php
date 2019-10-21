  
    <?php
      if(isset($_SESSION['login_user']))
      {
        $ay=0;

        $exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
        $res= mysqli_query($db,"SELECT * FROM `issue_book` where Username='$_SESSION[login_user]' and Approve ='$exp' ;");
      
      while($row=mysqli_fetch_assoc($res))
      {
        $d= strtotime($row['Return']);
        $c= strtotime(date("Y-m-d"));
        $diff= $c-$d;

        if($diff>=0)
        {
          $ay= $ay+floor($diff/(60*60*24)); 
        } 
        
      }
      $_SESSION['fine']=$ay*20;
    }
    ?>
  