<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<style>
 h2 {
  margin-bottom: 20px;
  font-family: fantasy;
    font-size: 30px;
}



input, textarea {
  padding: 10px;
  border: 1px solid #E5E5E5;
  width: 200px;
  color: #999999;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
      
}

textarea {
  width: 200px;
  height: 150px;
  max-width: 200px;
  line-height: 18px;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
  border-color: 1px solid #C9C9C9;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;  
}

.form label {
  margin-left: 10px;
  font-family:monospace;
    font-size: 15px;
}


.usersubmit input {
  width: 100px; 
  height: 40px;
  background-color: #474E69; 
  color: #FFF;
  border-radius: 3px;
    
}
</style>
</head>
<body>
<h2>Contact Us</h2>
  
  <form class="form" action="contactform.php" method="POST">
    
    <p class="username">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" placeholder="Enter your name" required="true">
      
    </p>
    
    <p class="useremail">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" placeholder="mail@example.com" required="true">
      
    </p>
      
    <p class="usertext">
       <label for="text">Comments</label>
       <textarea name="text" placeholder="Write something to us" ></textarea>
                       
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>
</body>
</html>