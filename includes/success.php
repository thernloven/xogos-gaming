<style>
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #27293D;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto',
  'Helvetica Neue', 'Ubuntu', sans-serif;
  height: 100vh;
  margin: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
section {
  background: #ffffff;
  display: flex;
  flex-direction: column;
  width: 400px;
  height: 112px;
  border-radius: 6px;
  justify-content: space-between;
}
</style>

<body>
  <section>
    <p>
      Your registration was successful. Log in and continue adding your kids:  
    </p>
    <form action="http://localhost:8888/web-development/xogos-gaming/includes/login.php">
    <button style="background: rgb(223,78,204);
              background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none; color: white;" type="submit" id="checkout-button" class="btn btn-lg btn-block btn-outline-primary">Continue
              </button>
            </form>

  </section>
</body>
</html>