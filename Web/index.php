<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Online Doc Viewer</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--[if IE]>
      	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<style>
    html, body
    {
        height: 100%;
        background-color: #333333;
        padding: 0px;
        margin: 0px;
        color: #FFFFFF;
    }
    a {
        color: #FFFFFF;
    }
    a:visited {
        color: #FFFFFF;
    }
    li {
        width:140px;
    	word-wrap: break-word;
    }
</style>
</head>
<body>
<div id="container" style="height:100%;margin:0px;padding:0px;overflow:hidden">
    <table style="width: 100%; height: 100%; border: 1px solid black; margin:0px;" cellspacing="0">
        <tr style="height:15px;">
            <td colspan="2" style="border-bottom: 1px solid #FFFFFF; text-align:center;">
                <a href="getFile.php?file=intro.pdf" target="viewer"><h3>Online Document Viewer</h3></a>
            </td>
        </tr>
        <tr>
            <td valign="top" style="width:150px; border-right:1px solid #FFFFFF;">
                <div style="padding:5px;">
                    <ul>
                        <li>
                            <a href="getFile.php?file=demodoc.pdf" target="viewer">Demodoc.pdf</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=Convert_PowerPoint_To_Impress_Presentation.odt" target="viewer">Convert_PowerPoint_To_Impress_Presentation.odt</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=sample.doc" target="viewer">Sample.doc</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=lect15_cloud.ppt" target="viewer">lect15_cloud.ppt</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=MSWord_Thesis_091.ppt" target="viewer">MSWord_Thesis_091.ppt</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=Sample-Excel-Workbook-Document.xlsx" target="viewer">Sample-Excel-Workbook-Document.xlsx</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=Sample-Power-Point-Presentation-Document.pptx" target="viewer">Sample-Power-Point-Presentation-Document.pptx</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=Sample-Word-Document.docx" target="viewer">Sample-Word-Document.docx</a>
                        </li>
                        <li>
                            <a href="getFile.php?file=sample.xls" target="viewer">sample.xls</a>
                        </li>
                    </ul>
                </div>
            </td>
            <td style="margin:0px;padding:0px;overflow:hidden">
            	<iframe id="viewer" name="viewer" width='100%' height='100%' frameBorder="0"
            	src="pdfjs/web/viewer.html?file=http://mehul92.koding.io/Documents/intro.pdf" allowfullscreen webkitallowfullscreen></iframe>
	        </td>
	    </tr>
	    <tr style="height:10px;">
            <td colspan="2" style="border-top: 1px solid #FFFFFF;">
                <center><a href="getFile.php?file=intro.pdf" target="viewer">Online document viewer</a> is developed by Mehul Porwal</center>
            </td>
        </tr>
	</table>
</div>
</body>
</html>
