<!doctype>
<html>
    <head>
        <script src="jquery-2.1.0.min.js"></script>
        <script src="process.js">
        </script>
       
    </head>
    <body>
        
   
                    <div id="dataContent"></div>

                    <form id="myForm" action="ajaxInsert.php" method="POST">
                        <table border="1">
                            <tr><th align="left">Please Enter the Order Number: </th><td><input type="text" name="ordernumber" id="ordernumber"></td></tr>
                            <tr><th align="left">Please Select the status you want to change: </th><td><select id="status" name="status">
                                                            <option value="Sent">Sent</option>
                                                            <option value="Delivered">Delivered</option>
                                                            <option value="Ordered">Ordered</option>
                                    </select></td></tr>
                            <tr>
                                <td></td><td><input type="button" onClick="press()" value="Update Status"></td></tr>
                        </table>
                    </form>
                    <div id="txtHint"></div>
    </body>
    
</html>