<!-- <div class="logocontainer">
	
	<h1>Welcome to FPS Data Management</h1>

	<img id="logolarge" src="http://backup-pc.dyndns-server.com/webform/img/fps600.png" />

</div> -->	

<!-- <div class="dashborad-header"><h1>Performance Overview - FPS Motor Group</h1></div> -->

   
		<div class="grid">
            <div class="grid-12 height750">
           	<div><h3>Profitability</h3></div>

           		<div class="column_a">
           			<h5>Turnover</h5>
           			<div id="table_div_a" class="googletable2"></div>
           		</div>
           		<div class="column_b">
           			<h5>March</h5>
           			<div id="table_div_b" class="googletable2"></div>
           		</div>
           		<div class="column_c">
           			<h5>March Ytd</h5>
           			<div id="table_div_c" class="googletable2"></div>
           		</div>
           		
           		<div class="column_a">
           			<h5>Turnover</h5>
           			<div id="table_div_d" class="googletable2"></div>
           		</div>
           		<div class="column_b">
           			<h5>March</h5>
           			<div id="table_div_e" class="googletable2"></div>
           		</div>
           		<div class="column_c">
           			<h5>March Ytd</h5>
           			<div id="table_div_f" class="googletable2"></div>
           		</div>
           		
           		<div class="column_a">
           			<h5>Turnover</h5>
           			<div id="table_div_g" class="googletable2"></div>
           		</div>
           		<div class="column_b">
           			<h5>March</h5>
           			<div id="table_div_h" class="googletable2"></div>
           		</div>
           		<div class="column_c">
           			<h5>March Ytd</h5>
           			<div id="table_div_i" class="googletable2"></div>
           		</div>
           		
           		<div class="column_a">
           			<h5>Turnover</h5>
           			<div id="table_div_j" class="googletable2"></div>
           		</div>
           		<div class="column_b">
           			<h5>March</h5>
           			<div id="table_div_k" class="googletable2"></div>
           		</div>
           		<div class="column_c">
           			<h5>March Ytd</h5>
           			<div id="table_div_l" class="googletable2"></div>
           		</div>
           		
                <div class="clearboth"></div>     		

         
            </div>
            <div class="grid-12 height350">
            <div><h3>Site A and B comparison</h3></div>	
            <div id="visualization" class="graph1"></div>	
            <div class="buttons1"><input type="button" class="submit-button" id="b1" value="Change Values" /></div>
            </div>
            <div class="grid-12_withmargin height350"><div id="piechart2"></div></div>
        </div>
                    
		<div class="grid">
            <div class="grid-8 height500">
            	<h4>Site A Performance</h4>
            	<div id="columnchart_material1" class="column_charts"></div>
            </div>
            <div class="grid-8 height500">
            	<h4>Site B Performance</h4>
            	<div id="columnchart_material2" class="column_charts"></div>

            </div>
            <div class="grid-8 height500">
            	<h4>Stock Values by Stock Type</h4>
				<div id="columnchart_material3" class="column_charts"></div>
			</div>
			

            
		</div>

	<div class="clearboth"></div>	
 <!--        <article id="row6">
            <div>12</div>
    </article> -->
    
 


<!---------- Tables ---------->

<!-- a,b,c -->    
    
<script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Site');

        data.addRows([
          ['Swindon'],
          ['Oxford'],
          ['Marlborough'],
          ['Skurrays Group']
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_a'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_b'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_c'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>

<!-- d,e,f -->

 <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Site');

        data.addRows([
          ['Swindon'],
          ['Oxford'],
          ['Marlborough'],
          ['Skurrays Group']
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_d'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_e'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_f'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    
    
<!-- g,h,i -->    

 <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Site');

        data.addRows([
          ['Swindon'],
          ['Oxford'],
          ['Marlborough'],
          ['Skurrays Group']
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_g'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_h'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_i'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    
<!-- j,k,l -->

 <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Site');

        data.addRows([
          ['Swindon'],
          ['Oxford'],
          ['Marlborough'],
          ['Skurrays Group']
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_j'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}],
          [{v: 2927026.64, f: '2927026.64'},  {v: 2695688, f: '2695688'},  {v: 109, f: '109%'},  {v: 2759626.09, f: '2759626.09'},  {v: 106, f: '106%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_k'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
      	
      	var cssClassNames = {
		    'headerRow': '',
		    'tableRow': '',
		    'oddTableRow': '',
		    'selectedTableRow': '',
		    'hoverTableRow': '',
		    'headerCell': 'redheader',
		    'tableCell': '',
		    'rowNumberCell': ''};

  		var options = {'showRowNumber': false, 
  					   'allowHtml': true, 
  					   'cssClassNames': cssClassNames,
  					   	width: '96%',
		                height: '100%',};
      	
      	
      	
        var data = new google.visualization.DataTable();
        data.addColumn('number', '2015');
        data.addColumn('number', 'Budget');
        data.addColumn('number', '%');
        data.addColumn('number', '2014');
        data.addColumn('number', '%');
        data.addRows([
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}],
          [{v: 5565938.41, f: '5565938.41'},  {v: 5420695.54, f: '5420695.54'},  {v: 103, f: '103%'},  {v: 5897265.53, f: '5897265.53'},  {v: 94, f: '94%'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div_l'));

        table.draw(data,options, {showRowNumber: true});
        
        $(window).resize(function(){
  		table.draw(data,options, {showRowNumber: true});
		});
        
        
      }

    </script>

<!--- Column Charts --->
 
    <script type="text/javascript">
    
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawChart1);
			function drawChart1() {
				  var data = google.visualization.arrayToDataTable([
				    ['Year', 'Sales', 'Expenses'],
				    ['2004',  1000,      400],
				    ['2005',  1170,      460],
				    ['2006',  660,       1120],
				    ['2007',  1030,      540]
				  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
 				};

var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_material1'));
  chart.draw(data, options);
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart2);
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_material2'));
  chart.draw(data, options);
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart3);
function drawChart3() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_material3'));
  chart.draw(data, options);
}


$(window).resize(function(){
  drawChart1();
  drawChart2();
  drawChart3();
});

    </script>
  
<!--- Pie Chart --->    


  <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Money Value');
        data.addRows([
          ['Auction',    93457.2],
          ['Bodyshop Loan',      76815.07],
          ['Courtesy',  340092.63],
          ['Demonstrator', 5001208.79],
          ['Hire',    159756.15],
          ['Pre Regn',    426591.08],
          ['Retail',    7322241.96],
          ['Sold',    621392.56],
          ['Trade',    897824.09],
          ]);

        // Set chart options
        var options = {
        			//	legend:'none',
        				title: 'Profit Share £',
        				is3D: true,
                       'width':((window.innerWidth))/2.35,
                       slices: { 1: {offset: 0.4},
			                     2: {offset: 0.4},
			                     4: {offset: 0.4},
			                     5: {offset: 0.4},
			                     7: {offset: 0.4},
			                     9: {offset: 0.4},
                 				},
                       'height':((window.innerHeight))/3};
                       // 'width': '100%',
		  			//	'height': '100%';

        // Instantiate and draw our chart, passing in some options.
        function resize () {
      var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
      chart.draw(data, options);
      }

     window.onload = resize();
     window.onresize = resize;
      }
      
           drawChart(); 
      
    $(window).resize(function() {
  	  drawChart();
	});
    
    </script>
    
<!-- Combination Chart --> 
 
 <script type="text/javascript">
      	google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawVisualization);

	function drawVisualization() {
  		// Some raw data (not necessarily accurate)
  
    var rowData1 = [['Month', 'Insignia', 'Zafira', 'Astra', 'Corsa', 'Agila', 'Average'],
                    ['2004/05', 165, 938, 522, 998, 450, 114.6],
                    ['2005/06', 135, 1120, 599, 1268, 288, 382],
                    ['2006/07', 157, 1167, 587, 807, 397, 623],
                    ['2007/08', 139, 1110, 615, 968, 215, 409.4],
                    ['2008/09', 136, 691, 629, 1026, 366, 569.6]];
    var rowData2 = [['Month', 'Insignia', 'Zafira', 'Astra', 'Corsa', 'Agila', 'Average'],
                    ['2004/05', 122, 638, 722, 998, 450, 614.6],
                    ['2005/06', 100, 1120, 899, 1268, 288, 682],
                    ['2006/07', 183, 167, 487, 207, 397, 623],
                    ['2007/08', 200, 510, 315, 1068, 215, 609.4],
                    ['2008/09', 123, 491, 829, 826, 366, 569.6]];

  	var data = [];
	    data[0] = google.visualization.arrayToDataTable(rowData1);
	    data[1] = google.visualization.arrayToDataTable(rowData2);

    var options = {
		width: '100%',
		height:'100%',
		vAxis: {title: "Sales"},
		hAxis: {title: "Month"},
		seriesType: "bars",
		series: {5: {type: "line"}},
		animation:{
		    duration: 1000,
		    easing: 'out'
		},
    };
	var current = 0;
 		// Create and draw the visualization.
    var chart = new google.visualization.ComboChart(document.getElementById('visualization'));
    var button = document.getElementById('b1');
    
 	function drawChart() {
      // Disabling the button while the chart is drawing.
      button.disabled = true;
      google.visualization.events.addListener(chart, 'ready',
          function() {
            button.disabled = false;
            button.value = 'Switch to ' + (current ? 'Site A' : 'Site B');
          });
      options['title'] = 'Monthly Vauxhall sales in ' + (current ? 'Site B' : 'Site A') + ' - Summary Graph';

      chart.draw(data[current], options);
    }

  	drawChart(options);
  
  	$(window).resize(function() {
  	  drawChart(options);
	});

    button.onclick = function() {
      current = 1 - current;
      drawChart(options);
    };
}
    </script>
