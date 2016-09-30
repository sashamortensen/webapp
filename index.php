<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Framework</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.css"/>
<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script>
<script>  
 
  $(document).ready(function() {
    // Assign global variables
    hdrMainVar = $('#hdrMain');
    contentMainVar = $('#contentMain');
    ftrMainVar = $('#ftrMain');
    contentTransitionVar = $('#contentTransition');
    stateLabelVar = $('#stateLabel');
    whatLabelVar = $('#whatLabel');
    stateVar = $('#state');
    whatVar = $('#what');
    form1Var = $('#form1');
    confirmationVar = $('#confirmation');
    contentDialogVar = $('#contentDialog');
    hdrConfirmationVar = $('#hdrConfirmation');
    contentConfirmationVar = $('#contentConfirmation');
    ftrConfirmationVar = $('#ftrConfirmation'); 
    inputMapVar = $('input[name*="_r"]');
	
	function hideMain()
	{
	  hdrMainVar.hide();
	  contentMainVar.hide();
	  ftrMainVar.hide();   
	}
	 
	function showMain()
	{
	  hdrMainVar.show();
	  contentMainVar.show();
	  ftrMainVar.show();
	}
	
	function hideContentDialog()
	{
	  contentDialogVar.hide();
	}   
	 
	function showContentDialog()
	{
	  contentDialogVar.show();
	}
	
	function hideContentTransition()
	{
	  contentTransitionVar.hide();
	}      
	 
	function showContentTransition()
	{
	  contentTransitionVar.show();
	}
	
	function hideConfirmation()
	{
	  hdrConfirmationVar.hide();
	  contentConfirmationVar.hide();
	  ftrConfirmationVar.hide();
	}

	function showConfirmation()
	{
	  hdrConfirmationVar.show();
	  contentConfirmationVar.show();
	  ftrConfirmationVar.show();
	}

    // Assign global variables     
    hideContentDialog();
    hideContentTransition();
    hideConfirmation(); 
	
	});
	
	$('#form1').submit(function() 
	{
	  var err = false;
	  // Hide the Main content
	  hideMain();
   
  // Reset the previously highlighted form elements
  stateLabelVar.removeClass(MISSING); 
  whatLabelVar.removeClass(MISSING);              
  inputMapVar.each(function(index)
  {            
  	$(this).prev().removeClass(MISSING); 
  });
   
  // Perform form validation
  inputMapVar.each(function(index)
  {  
    if($(this).val()==null || $(this).val()==EMPTY)
	{            
      $(this).prev().addClass(MISSING);            
      err = true;
    }          
  }); 
    
  if(stateVar.val()==NO_STATE)
  {           
    stateLabelVar.addClass(MISSING);                     
    err = true;
  }  
            
  if(whatVar.val()==null||whatVar.val()==EMPTY)
  {   
    whatLabelVar.addClass(MISSING);   
    err = true;
  }
   
  // If validation fails, show Dialog content
  if(err == true)
  {            
    showContentDialog();
    return false;
  }        
 
  // If validation passes, show Transition content
  showContentTransition();
 
  // Submit the form
  $.post("/forms/requestProcessor.php", form1Var.serialize(), function(data)
  {
    confirmationVar.text(data);
    hideContentTransition();
    showConfirmation();
	
	  // Perform form validation
	inputMapVar.each(function(index)
	{  
		if($(this).val()==null || $(this).val()==EMPTY){            
		$(this).prev().addClass(MISSING);            
		err = true;
  	}          
	}); 
	  
	if(stateVar.val()==NO_STATE)
	{           
	  stateLabelVar.addClass(MISSING);                     
	  err = true;
	}
	            
	if(whatVar.val()==null||whatVar.val()==EMPTY)
	{   
	  whatLabelVar.addClass(MISSING);   
	  err = true;
	}
	
  });
          
  return false;
  }); // Ready
  
</script>
</head>

<body>
<div data-role="page" data-theme="b" id="page1"> 
  <!-- Main content starter her -->
  <div data-role="header" id="hdrMain" name="hdrMain" data-nobackbtn="true">New Claim</div>
  <div data-role="content" id="contentMain" name="contentMain">
    <div id="shipDiv" data-role="fieldcontain">
      <label for="shipNo">Shipping number*</label>
      <input id="shipNo" name="shipNo_r" type="text" />
    </div>
    <div id="firstnameDiv" data-role="fieldcontain">
      <label for="firstname">First name*</label>
      <input id="firstname" name="firstname" type="text" />
    </div>
    <div id="lastnameDiv" data-role="fieldcontain">
      <label for="lastname">Last name*</label>
      <input id="lastname" name="lastname" type="text" />
    </div>
    <div id="emailDiv" data-role="fieldcontain">
      <label for="email">Email*</label>
      <input id="email" name="email" type="email" />
    </div>
    <div id="phoneDiv" data-role="fieldcontain">
      <label for="phone">Phone</label>
      <input id="phone" name="phone" type="number"/>
    </div>
    <div id="streetaddressDiv" data-role="fieldcontain">
      <label for="streetaddress">Street address*</label>
      <input id="streetaddress" name="streetaddress" type="text" />
    </div>
    <div id="cityDiv" data-role="fieldcontain">
      <label for="city">City*</label>
      <input id="city" name="city" type="text" />
    </div>
    <div id="stateDiv" data-role="fieldcontain">
      <label id="stateLabel" for="state">State*</label>
      <select id="state" name="state_r" tabindex="2">
        <option value="ZZ">Please select a state</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
      </select>
    </div>
    <div id="postalcodeDiv" data-role="fieldcontain">
      <label for="postalcode">Postal code*</label>
      <input id="postalcode" name="postalcode" type="number" />
    </div>
    <div id="textarea" data-role="fieldcontain">
      <label for="textarea">Please explain what happend*:</label>
      <textarea id="textarea" name="textarea" type="number"></textarea>
    </div>
    <div id="submitclaim" data-role="fieldcontain">
      <input type="submit" id="submitclaim" name="submitclaim" value="Submit Claim" />
    </div>
  </div>
  <div data-role="footer" id="ftrMain" name="ftrMain"></div>
  <!-- Main content slutter her --> 
  
  <!-- Dialog content starter her -->
  <div align="CENTER" data-role="content" id="contentDialog" name="contentDialog"> </div>
  <!-- Dialog contant slutter her--> 
  
  <!-- Transition content page starter her -->
  <div data-role="content" id="contentTransition" name="contentTransition"> </div>
  <!-- Transition content page slutter her --> 
  
  <!-- Confirmation content starter her -->
  <div data-role="header"  id="hdrConfirmation" name="hdrConfirmation" data-nobackbtn="true">...</div>
  <div data-role="content" id="contentConfirmation" name="contentConfirmation" align="center"> ... </div>
  <div data-role="footer" id="ftrConfirmation" name="ftrConfirmation"></div>
  <!-- Confirmation content slutter her --> 
  ... </div>
<!-- Side 1 -->
</body>
</html>
