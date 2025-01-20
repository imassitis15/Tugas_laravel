<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,intial-scale=1.0" />
    <title>Imas Siti Suharti</title>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="welcome.html" method="get">

        <label for="fname">first Name:</label><br />
        <input type="text" id="fname" name="fname"><br />
        <label for="lname">Last Name:</label><br />
        <input type="text" id="lmane" name="lname" />

    <p>Gender</p>
        <input type="radio" id="Gender" Name="Gender" />
        <label for="Male">Male</label>
        <input type="radio" id="Gender" Name="gender" />
        <label for="Female">Female</label>

        <p>Nationality</p>
        <select id="Nationality" name="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option Value="Amerika">Amerika</option>
            <option Value="Inggris">Inggris</option>
        </select>

        <p>Language Spoken</p>
        <input type="checkbox" id="Bahasa1" name="Bahasa1" value="Bahasa Indonesia"/>
        <label for="Bahasa1">Bahasa Indonesia</label><br />
        <input type="checkbox" id="Bahasa2" Name="Bahasa2" value="English" />
        <label for="Bahasa2">English</label><br />
        <input type="checkbox" id="Bahasa3" name="Bahasa3" value="Other" />
        <label for="Bahasa3">Other</label><br />

        <p>Bio</p>
        <textarea id="message" name="message" rows="10" cols="30"></textarea>
        <br></br>
        <a href="welcome.html">
        <input type="button"  name="sign" value="Sign up"></input>
        </a>
        </form>
    </html>  