<?
include_once "contacular.php";

$form = new ContacularForm("custom");	// Create a custom Contacular Form

$form->setAttribution(false);

$form->addField("from_name", "Name", "mandatorytext", null, 200);
$form->addField("age", "Age", "mandatorytext", null, 50);
$form->addField("gender", "Gender", "select", null, 70, array("Male", "Female"));
$form->addField("from_email", "E-mail", "email", null, 200);
$form->addField("enquiry", "Message", "mandatorytextarea", 100, 200);
$form->addField("picture", "Add a picture", "file");
$form->addField("response", "Want a response?", "checkbox");

$form->addRecipient("foobar@contacular.co.uk");	// Add a recipient

if ($form->processResponse()) 			// If we processed a response from the form...
{
	echo "Thanks for contacting us!"; 	// display a 'thanks' message
}
else 						// otherwise
{
	echo $form->getErrors();		// show any validation errors
	echo $form->getCode(); 			// and output the form code.
}

?>
