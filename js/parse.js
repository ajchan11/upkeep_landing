Parse.initialize("VVfAyVWlr7ekGACyqziLbpq22x9j7c8G2D7xvloS", "wgJBN9Ozvdq22n50cyyswTYbMTe6O04WXxZRAQtU");

// var TestObject = Parse.Object.extend("TestObject");
// var testObject = new TestObject();
// testObject.save({foo: "bar"}).then(function(object) {
//   alert("yay! it worked");
// });

$(function(){
	$("form").on("submit", function(e){
		e.preventDefault()
		var user = new Parse.User()
		var input_user = $("#username").val().replace(/%20/g, "+")
	  var input_password = $("#password").val().replace(/%20/g, "+")
	  var input_signup_company = $("#signup_company").val().replace(/%20/g, "+")

		user.set("username", input_user);
		user.set("password", input_password);
		user.set("signup_company", input_signup_company);
	  
	  
		  
		user.signUp(null, {
		  success: function(user) {
		    // Hooray! Let them use the app now.
		  },
		  error: function(user, error) {
		    // Show the error message somewhere and let the user try again.
		    alert("Error: " + error.code + " " + error.message);
		  }
		})
	})
})
