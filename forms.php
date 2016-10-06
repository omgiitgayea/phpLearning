<!DOCTYPE html>
<html>
<head>
    <title>A Form</title>
</head>
<body>
    <form method="post" action="">
        <div>User name: <input type="text" name="name"></div>
        <div>Password: <input type="password" name="password"></div>
        <div>Gender:
            <input type="radio" name="gender" value="m">male
            <input type="radio" name="gender" value="f">female
        </div>
        <div>
            Favorite color:
            <select name="color">
                <option value="#f00">Red</option>
                <option value="#0f0">Green</option>
                <option value="#00f">Blue</option>
            </select>
        </div>
        <div>
            Languages spoken:
            <select name="languages[]" multiple size="3">
                <option value="en">English</option>
                <option value="#fr">French</option>
                <option value="#it">Italian</option>
            </select>
        </div>
        <div>
            Comments:
            <textarea name="comments"></textarea>
        </div>
        <div><input type="checkbox" name="tc" value="ok">I accept the terms and conditions.</div>
        <div><input type="submit" name="submit" value="Submit"></div>
    </form>
</body>
</html>