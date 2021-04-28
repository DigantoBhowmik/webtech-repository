<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #008080;
  padding: 30px;
  text-align: right;
  font-size: 25px;
  color: white;
}

nav {
  float: left;
  width: 30%;
  height: 500px; 
  background: #ccc;
  padding: 20px;
}


nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #afeeee;
  height: 500px; 
}


section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: #008080;
  padding: 10px;
  text-align: center;
  color: white;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>