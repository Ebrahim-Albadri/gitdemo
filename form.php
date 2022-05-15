<html lang="en">
<head>
    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>you right<h1>
    <h1>this form for display student data</h1>
    <form action="$PHP_SELF" method="post">
        <table><tr>
        <th><label> name:</label></th><th><div><input type="text" name="name"><label style="color: rgb(255, 0, 0)"> *name is reqeude</label></div></th></tr>
        <tr><th><label> email:</label></th><th><div><input type="text" name="email"><label style="color: rgb(255, 0, 0)"> *name is reqeude</label></div></th></tr>
        <tr><th><label> group:</label></th><th><input type="text" name="group"></th><th></th></tr>
        <tr><th><label> text:</label></th><th> <textarea name="class_detales" id="" cols="30" rows="10"></textarea></th></tr>
    <tr>
        <th>
            select course
        </th>
        <th>
       <select  name = 'subject[]' class="mniu"  multiple size = 6> 
        <option value = 'php' name ="course">php</option>
        <option value = 'javascript' name ="course">javascript</option>
        <option value = 'html' name ="course">html</option>
        <option value = 'css' name ="course">css</option>
        <option value = 'mysql' name ="course">mysql</option>
        <option value = 'wordpress' name ="course">wordpress</option>
       </select>
        </th>
       <tr><th>gender</th><td><div class="gender">mail<input type="radio" name="genders"  value="femile" id="femile">famila<input type="radio" name="genders" value="mail" id="mail"><label style=" color: rgb(255, 0, 0)"> *gender is reqeude</label></div></td></tr>
       <tr><th><label> agree:</label></th><th><div><input type="checkbox"  name="vehicle1" ><label style="color: rgb(255, 0, 0)"> *agre is requied</label></div></th></tr>
       <tr><th><input type = 'submit' name = 'submit' value = Submit></th></tr>
</tr>
    </table>
    </form>
    <h1>your given data ara as</h1>
            
        <?php  
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["group"]) && !empty($_POST["class_detales"])  || !empty($_POST["subject[]"]))
        {

                // Check if any option is selected
    $name = $_POST["name"];
    $email = $_POST["email"];
    $group = $_POST["group"];
    $class_detales =$_POST["class_detales"]; 
    echo $name."<br>";
    echo $email."<br>";
    echo $group."<br>";
    echo $class_detales."<br>";        
    if(isset($_POST["submit"]))
    {
        // Check if any option is selected
        if(isset($_POST["subject"]))
        {
            // Retrieving each selected option
            foreach ($_POST['subject'] as $subject)
                print "You selected $subject<br/>";
        }
                          
        if(isset($_POST['submit'])){
            if(!empty($_POST['genders'])) {
                echo '  ' . $_POST['genders'];
            } else {
                echo 'Please select the value.';
            }
            }
    else
        echo "Select an option first !!";
    }
        }
      
        ?> 


</body>
</html>
