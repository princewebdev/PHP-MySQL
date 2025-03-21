<?php $form_complete = true; ?>
<h2>Contact</h2>

<form name="contact" method="POST">
    <div>
        <label for="name">Name:</label> 
        <input type="text" name="name" required placeholder="Your Name" />
        <?php
            $regex = "/^[a-zA-Z-' ]*$/";
            if(isset( $_POST['name'] ) && empty( trim( $_POST['name'] ) ) ){
                echo '<p class="alert">'. 'Name is required'. '</p>';
                $form_complete = false;
            }elseif( isset( $_POST['name'] ) && !preg_match( $regex,$_POST['name'] )){
                echo '<p class="alert">'. 'Give me correct name'. '</p>';
                $form_complete = false;
            }
        ?>
    </div>
    <div>
        <label for="email">Email:</label> 
        <input type="email" name="email" required placeholder="Your Email" />
        <?php
            if(isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) ){
                echo '<p class="alert">'. 'Email is required'. '</p>';
                $form_complete = false;
            }else if( isset( $_POST['email'] ) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
                echo '<p class="alert">'. 'Email not match'. '</p>';
                $form_complete = false;
            }
        ?>
    </div>
    <div>
        <p>Reason for Contact:</p>
        <input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
        <input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
        <input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
    </div>
    <div>
        <p>What topics do you like reading about? (Check all that apply):</p>
        <input type="checkbox" name="topics[]" id="HTML" value="HTML" /> <label for="HTML">HTML</label>
        <input type="checkbox" name="topics[]" id="CSS" value="CSS" /> <label for="CSS">CSS</label>
        <input type="checkbox" name="topics[]" id="PHP" value="PHP" /> <label for="PHP">PHP</label>
        <input type="checkbox" name="topics[]" id="WordPress" value="WordPress" /> <label for="WordPress">WordPress</label>
    </div>
    <div>
        <p>What's your favorite movie(s)?</p>
        <select name="movie[]" id="movie" multiple>
            <option value="Star Wars I">Star Wars I</option>
            <option value="Star Wars II">Star Wars II</option>
            <option value="Star Wars III">Star Wars III</option>
            <option value="Star Wars IV">Star Wars IV</option>
            <option value="Star Wars V">Star Wars V</option>
            <option value="Star Wars VI">Star Wars VI</option>
            <option value="Star Wars VII">Star Wars VII</option>
            <option value="Star Wars VIII">Star Wars VIII</option>
            <option value="Star Wars IX">Star Wars IX</option>
            <option value="none">I don't like movies</option>
        </select>
    </div>
    <div>
        <label for="message">What's your message?</label>
        <textarea name="message" required></textarea>
        <?php
            if(isset( $_POST['message'] ) && empty( trim( $_POST['message'] ) ) ){
                echo '<p class="alert">'. 'Message is required'. '</p>';
                $form_complete = false;
            }
        ?>
    </div>
    <div><input type="submit" value="Submit" /></div>
</form>

<?php
$form_complete ?: true;
if($form_complete){
    foreach( $_POST as $name => $value){
        if( is_array( $value ) ){
            $value = implode(',' , $value);
        }   
        if( $value){
            echo '<p> <b>'. ucfirst($name) . '</b> is ' . $value;
    
        }
    }
}

?>

<style>
    .alert{
        color: red;
    }
</style>