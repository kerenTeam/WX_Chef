<input id="Text1" type="text" onkeypress="return IsNum(event)" />
    <script language="javascript" type="text/javascript">
        function IsNum(e) {
            var k = window.event ? e.keyCode : e.which;
            if (((k >= 48) && (k <= 57)) || k == 8 || k == 0) {
            } else {
                if (window.event) {
                    window.event.returnValue = false;
                }
                else {
                    e.preventDefault(); //for firefox 
                }
            }
        } 
    </script>