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
  text-align: center;
  font-size: 35px;
  color: white;
}



nav {
  float: left;
  width: 30%;
  height: 300px; 
  background: #ccc;
  padding: 20px;
}


nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: center;
  padding: 20px;
  width: 100%;
  background-color: #afeeee;
  height: 800px; 
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
