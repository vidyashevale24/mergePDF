<h2>#PDF merger assignment</h2>

<h2>Following are the steps to open and run the project</h2>
1)Expand the archive 
	i)using Ubuntu 14.04 
		go to the folder path and hit  below command or add full path
		unzip vidya_shevale.zip
					OR
	ii)using Windows powerShell
	Expand-Archive -Force Desktop/vidya_shevale.zip d:/projects/

<h2>Following are some important points related to code</h2>
1)convert all links into the array using regular expression

	i)Find (in regular expression mode):

	(.+)
	Replace with:

	"\1"
	This adds the quotes:

	https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD107312205540085000-1731220554008500.pdf"
	"https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338486.pdf"
	"https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338426.pdf"

	ii)Find (in extended mode):

	\r
	Replace with (with a space after the comma, not shown):
	, 

	it will output

	"https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD107312205540085000-1731220554008500.pdf",
	"https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338486.pdf",
	"https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338426.pdf"

	iii)Add the $arr = assignment and braces manually:

	$arr = [
		"https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD107312205540085000-1731220554008500.pdf",
		"https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338486.pdf",
		"https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338426.pdf"
	];

2)Create zip file on windows using Windows PoweShell<br>
	
	i)Compress-Archive C:\xampp\htdocs\pdf C:\xampp\htdocs\pdf.zip						
						Or
	ii)Compress-Archive pdf pdf.zip //if you are in same folder where you want to compress file

3)Unzip file using Windows PoweShell<br>
	
	i)Expand-Archive -Force Desktop\vidya_shevale.zip C:\xampp //give the path where you have stored the folder and where you want to expand the folder	
						Or
	ii)Expand-Archive -Force pdf.zip  //if you are in same folder where you want to extract file

4)Open mearged PDF file from windows terminal using adobe reader

start acrord32 /A "page=1&toolbar=0&pagemode=bookmarks&zoom=100" "C:\xampp\htdocs\pdf\merged\merged_pdf.pdf" //Give full path if you want to open file from any folder

start acrord32 /A "page=1&toolbar=0&pagemode=bookmarks&zoom=100" "merged\merged_pdf.pdf" //if you are in project folder



