<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="./custom.css">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    outline: 0;
    border: 0;
}

body {
  height: 100vh;
  font-family: Arial, Helvetica, sans-serif;
  display: grid;
  place-items: center;
  background-color: gray;
}

h1 {
  margin-bottom: 2rem;
  color: blue;
}

form {
  display: flex;
  flex-direction: column;
  width: 24rem;
  gap: 1rem;
}

input,
select,
textarea {
  padding: 1.4rem;
  background: transparent;
  border: 1px solid black;
}

textarea {
  height: 6rem;
}

button {
  width: 8rem;
  padding: 1.4rem;
  cursor: pointer;
  background: crimson;
  color: black;
}
</style>
<body>

  <div class="container">
    <h1>Contact Form</h1>
    <form action="https://formsubmit.co/el/wepaxi" method="POST">
      <input type="text" name="Name" placeholder="Full Name" required>
      <input type="email" name="Email" placeholder="Email" required>
      <select name="Continent">
        <option>Africa</option>
        <option>Antartica</option>
        <option>Asia</option>
        <option>Australia</option>
        <option>Europe</option>
        <option>North america</option>
        <option>South america</option>
</select>
<textarea name="Message" placeholder="Message" required></textarea>
<button type="submit">Send</button>
</form>
</div>

</body>
</html>