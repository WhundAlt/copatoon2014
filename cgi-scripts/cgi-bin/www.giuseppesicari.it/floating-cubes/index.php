<html>
	<head>
	  <script type="text/javascript" src="design.js"></script>
		<script type="text/javascript" src="transform.js"></script>
		
		<script type="text/javascript" >
    
			function scene()
			{
				this.solid_number = 0;
				this.solid = new Array();
				this.observer = [0, 0, 0];
				this.distance = -650;
			}
			
			var world = new scene();
			
			var caduta = new Array();
			var oscillazione = new Array();
			var cadente = 0;
			var cadente2 = 0;
			var iterazioni = 0;
			var alpha = 1;
			var teta_x_global = 0;
			var teta_y_global = 0;
			
			function init()
			{
			  var lettera_c = get_letter("C",10,[255,20,44],[0,0,0]);
        var lettera_h = get_letter("H",10,[255,255,95],[0,0,0]);
        var lettera_r = get_letter("R",10,[64,175,74],[0,0,0]);
        var lettera_o = get_letter("O",10,[33,133,204],[0,0,0]);
        var lettera_m = get_letter("M",10,[255,20,44],[0,0,0]);
        var lettera_e = get_letter("E",10,[255,255,95],[0,0,0]);
        var lettera_e1 = get_letter("E",10,[255,20,44],[0,0,0]);
        var lettera_x = get_letter("X",10,[255,255,95],[0,0,0]);
        var lettera_p = get_letter("P",10,[64,175,74],[0,0,0]);
        var lettera_e2 = get_letter("E",10,[33,133,204],[0,0,0]);
        var lettera_r1 = get_letter("R",10,[255,20,44],[0,0,0]);
        var lettera_i = get_letter("I",10,[255,255,95],[0,0,0]);
        var lettera_m1 = get_letter("M",10,[64,175,74],[0,0,0]);
        var lettera_e3 = get_letter("E",10,[33,133,204],[0,0,0]);
        var lettera_n = get_letter("N",10,[255,20,44],[0,0,0]);
        var lettera_t = get_letter("T",10,[255,255,95],[0,0,0]);
        
        for (var i=0; i<lettera_c.length; i++)
        {
          translate_solid([-150, -50, -240],lettera_c[i]);
          world.solid[world.solid_number++] = lettera_c[i];
        }
        
        for (var i=0; i<lettera_h.length; i++)
        {
          translate_solid([-100, -50, -240],lettera_h[i]);
          world.solid[world.solid_number++] = lettera_h[i];
        }
        
        for (var i=0; i<lettera_r.length; i++)
        {
          translate_solid([-40, -50, -240],lettera_r[i]);
          world.solid[world.solid_number++] = lettera_r[i];
        }
        
        for (var i=0; i<lettera_o.length; i++)
        {
          translate_solid([10, -50, -240],lettera_o[i]);
          world.solid[world.solid_number++] = lettera_o[i];
        }
        
        for (var i=0; i<lettera_m.length; i++)
        {
          translate_solid([60, -50, -240],lettera_m[i]);
          world.solid[world.solid_number++] = lettera_m[i];
        }
        
        for (var i=0; i<lettera_e.length; i++)
        {
          translate_solid([120, -50, -240],lettera_e[i]);
          world.solid[world.solid_number++] = lettera_e[i];
        }
        
        for (var i=0; i<lettera_e1.length; i++)
        {
          translate_solid([-240, -50, -160],lettera_e1[i]);
          world.solid[world.solid_number++] = lettera_e1[i];
        }
        
        for (var i=0; i<lettera_x.length; i++)
        {
          translate_solid([-190, -50, -160],lettera_x[i]);
          world.solid[world.solid_number++] = lettera_x[i];
        }
        
        for (var i=0; i<lettera_p.length; i++)
        {
          translate_solid([-130, -50, -160],lettera_p[i]);
          world.solid[world.solid_number++] = lettera_p[i];
        }
        
        for (var i=0; i<lettera_e2.length; i++)
        {
          translate_solid([-80, -50, -160],lettera_e2[i]);
          world.solid[world.solid_number++] = lettera_e2[i];
        }
        
        for (var i=0; i<lettera_r1.length; i++)
        {
          translate_solid([-30, -50, -160],lettera_r1[i]);
          world.solid[world.solid_number++] = lettera_r1[i];
        }
        
        for (var i=0; i<lettera_i.length; i++)
        {
          translate_solid([20, -50, -160],lettera_i[i]);
          world.solid[world.solid_number++] = lettera_i[i];
        }
        
        for (var i=0; i<lettera_m1.length; i++)
        {
          translate_solid([40, -50, -160],lettera_m1[i]);
          world.solid[world.solid_number++] = lettera_m1[i];
        }
        
        for (var i=0; i<lettera_e3.length; i++)
        {
          translate_solid([100, -50, -160],lettera_e3[i]);
          world.solid[world.solid_number++] = lettera_e3[i];
        }
        
        for (var i=0; i<lettera_n.length; i++)
        {
          translate_solid([150, -50, -160],lettera_n[i]);
          world.solid[world.solid_number++] = lettera_n[i];
        }
        
        for (var i=0; i<lettera_t.length; i++)
        {
          translate_solid([210, -50, -160],lettera_t[i]);
          world.solid[world.solid_number++] = lettera_t[i];
        }
        
        parametri = get_rotation_parameter([0, 0, 0], [1, 0 ,0], 0.8);

        for (var i=0; i<world.solid_number; i++)
        {  
          rotate_solid_fast(parametri, parametri, world.solid[i]);
        } 

        for (var i=0; i<world.solid_number; i++)
        {
          caduta[i] = 25;
          oscillazione[i] = 0;
        }
        
        document.onkeydown = onKeyDown;
        document.onmousemove = onMouseMove;
        
        setInterval(draw,5);
				
			}

      function onKeyDown(evt) 
      {
        if(evt.keyCode==49)
          alpha = 0.1;
        if(evt.keyCode==50)
          alpha = 0.2;
        if(evt.keyCode==51)
          alpha = 0.3;
        if(evt.keyCode==52)
          alpha = 0.4;
        if(evt.keyCode==53)
          alpha = 0.5;
        if(evt.keyCode==54)
          alpha = 0.6;
        if(evt.keyCode==55)
          alpha = 0.7;
        if(evt.keyCode==56)
          alpha = 0.8;
        if(evt.keyCode==57)
          alpha = 0.9;
        if(evt.keyCode==48)
          alpha = 1;
      }
      
      function onMouseMove(evt) 
      {
        var x = evt.pageX-document.getElementById("display").offsetLeft;
        var y = evt.pageY-document.getElementById("display").offsetTop;
        
        if ((x>0) && (x<1000) &&(y>0) && (y<600))
        {
          teta_y_global = 0.05*(x-500)/500;
          teta_x_global = 0.05*(y-300)/300;
        }
        
      }
			
			function draw() 
			{
        var canvas = document.getElementById("display");
        
      	
      	var parametrig1 = get_rotation_parameter([0, -200, -500], [0, 1, 0], teta_y_global);
        var parametrig2 = get_rotation_parameter([0, 0, 0], [0, 1, 0], teta_y_global);
        var parametrig1a = get_rotation_parameter([0, -200, -500], [1, 0, 0], teta_x_global);
        var parametrig2a = get_rotation_parameter([0, 0, 0], [1, 0, 0], teta_x_global);
           
			
        for (var i=0; i<world.solid_number; i++)
        {
          rotate_solid_fast(parametrig1, parametrig2, world.solid[i]);
          rotate_solid_fast(parametrig1a, parametrig2a, world.solid[i]);
        }      
      	
      	
				if (canvas.getContext) 
				{
        	var ctx = canvas.getContext("2d");
				  				
					if (cadente<world.solid_number)
					{
					  cadente++;
            for (var i=0; i<cadente; i++)
            {
              if (caduta[i]>0)
              {
                caduta[i]--;
                translate_solid_direction(world.solid[i].axis_y, -10, world.solid[i]);
              }
            } 
          }
          else if(cadente2==0)
          {
            for (var i=0; i<world.solid_number; i++)
            {
              if (caduta[i]>0)
              {
                caduta[i]--;
                translate_solid_direction(world.solid[i].axis_y, -10, world.solid[i]);
              }
            } 
          }
          
          if ((caduta[world.solid_number-1]==0) && (iterazioni<100))
          {
            iterazioni++;	
            var parametri1 = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y,2*Math.PI/50);
            var parametri2 = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, 2*Math.PI/50);
            var parametri1a = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, -2*Math.PI/100);
            var parametri2a = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, -2*Math.PI/100);
            var parametri1b = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, -2*Math.PI/50);
            var parametri2b = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, -2*Math.PI/50);
            var parametri1c = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, 2*Math.PI/25);
            var parametri2c = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, 2*Math.PI/25);
            var parametri1d = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, -2*Math.PI/25);
            var parametri2d = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, -2*Math.PI/25);
            var parametri1e = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, 2*Math.PI/100);
            var parametri2e = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, 2*Math.PI/100);
            var parametri1f = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, 2*Math.PI/20);
            var parametri2f = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, 2*Math.PI/20);
            var parametri1g = get_rotation_parameter([0, -200, -500], world.solid[0].axis_y, 2*Math.PI/20);
            var parametri2g = get_rotation_parameter([0, 0, 0], world.solid[0].axis_y, 2*Math.PI/20);
			
            for (var i=0; i<world.solid_number; i++)
            {
              if (i%8==0)
                rotate_solid_fast(parametri1, parametri2, world.solid[i]);
              else if (i%8==1)
                rotate_solid_fast(parametri1a, parametri2a, world.solid[i]); 
              else if (i%8==2)
                rotate_solid_fast(parametri1b, parametri2b, world.solid[i]);
              else if (i%8==3)
                rotate_solid_fast(parametri1c, parametri2c, world.solid[i]); 
              else if (i%8==4)
                rotate_solid_fast(parametri1d, parametri2d, world.solid[i]); 
              else if (i%8==5)
                rotate_solid_fast(parametri1e, parametri2e, world.solid[i]); 
              else if (i%8==6)
                rotate_solid_fast(parametri1f, parametri2f, world.solid[i]); 
              else 
                rotate_solid_fast(parametri1g, parametri2g, world.solid[i]);           
            } 		
				  }
					
					for (var i=0; i<world.solid_number; i++)
          {
            if (caduta[i]==0)
            {
              if (oscillazione[i]<5)
              {
                translate_solid_direction(world.solid[i].axis_y, 0.5, world.solid[i]);
              }
              else
              {
                translate_solid_direction(world.solid[i].axis_y, -0.5, world.solid[i]);
              } 
              oscillazione[i]++;
              if (oscillazione[i]==10) 
              {
                oscillazione[i]=0;
              }
            }
          }      
          
          if (iterazioni==100)
          {
            if (cadente2<world.solid_number)
            {
              cadente2++;
              for (var i=0; i<cadente2; i++)
              {
                if (caduta[i]<25)
                {
                  caduta[i]++;
                  translate_solid_direction(world.solid[i].axis_y, 10, world.solid[i]);
                }
              } 
            }
            else
            {
              for (var i=0; i<world.solid_number; i++)
              {
                if (caduta[i]<25)
                {
                  caduta[i]++;
                  translate_solid_direction(world.solid[i].axis_y, 10, world.solid[i]);
                }
              } 
            }
					}
					
					if ((iterazioni==100) && (caduta[world.solid_number-1]==25) && (cadente2==world.solid_number))
					{
            iterazioni=0;
            cadente=0;
            cadente2=0;
          }  
					
					var contatore = 0;
					
					var visible_polygons = new Array();
					
					var delta_x;
					var delta_y;
					var delta_z;

					for (var j=0; j<world.solid_number; j++)
					{
						for (var i=0; i<world.solid[j].faces_number; i++)
						{
							delta_x = (world.solid[j].points[world.solid[j].faces[i][0]][0]+world.solid[j].points[world.solid[j].faces[i][2]][0])/2-world.observer[0];
							delta_y = (world.solid[j].points[world.solid[j].faces[i][0]][1]+world.solid[j].points[world.solid[j].faces[i][2]][1])/2-world.observer[1];
							delta_z = (world.solid[j].points[world.solid[j].faces[i][0]][2]+world.solid[j].points[world.solid[j].faces[i][2]][2])/2-world.observer[2];			

							visible_polygons[contatore++] = {solid:j, vertex:world.solid[j].faces[i], fillcolor:world.solid[j].fillcolor, linecolor:world.solid[j].linecolor, distance:delta_x*delta_x+delta_y*delta_y+delta_z*delta_z};							
						}
					}
					
					visible_polygons.sort(sortfunction);
					
					var projected_points = new Array();

					for (var j=0; j<world.solid_number; j++)
					{
					  projected_points[j] = new Array();
              
						for (var i=0; i<world.solid[j].points_number; i++)
            {
              projected_points[j][i] = project(world.distance, world.solid[j].points[i]);
            }
          }
          
          ctx.clearRect(0,0,1000,600);
					for (var i=0; i<contatore; i++)
					{	
						ctx.fillStyle = 'rgb(' + visible_polygons[i].fillcolor[0] + ',' + visible_polygons[i].fillcolor[1] + ','+visible_polygons[i].fillcolor[2]+')';
            ctx.strokeStyle = 'rgb(' + visible_polygons[i].linecolor[0] + ',' + visible_polygons[i].linecolor[1] + ','+visible_polygons[i].linecolor[2]+')';
            ctx.globalAlpha= alpha;
            ctx.beginPath();
            ctx.moveTo(projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[0]][0],projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[0]][1]);
						ctx.lineTo(projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[1]][0],projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[1]][1]);
						ctx.lineTo(projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[2]][0],projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[2]][1]);
						ctx.lineTo(projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[3]][0],projected_points[visible_polygons[i].solid][visible_polygons[i].vertex[3]][1]);
						ctx.closePath();
						ctx.fill();
						ctx.stroke();
					}
      	}
    	}

			function sortfunction(a, b)
			{
				return(b.distance-a.distance);
			}
			
  		</script>
  		
		<title> Floating Cubes - Chrome Experiment</title>
		
		<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2273729-1");
pageTracker._trackPageview();
} catch(err) {}</script>
		
	</head>
	<body onload="init()" bgcolor="#000" style="font-family: Verdana; color:white">
		<center>
			<canvas id="display" width="1000" height="600"></canvas><br/><br/>
			Use mouse to rotate 3D view and keys 0-9 to change transparency value.
			(<a href="http://www.giuseppesicari.it/" style="color: #f88133">See my other experiments</a>) - Doesn't work in IE.
		</center>
	</body>
	
</html>