<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>React Hello World</title>
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
  </head>
  <body>
 

<!-- Load our React component. -->
<div id="root"></div>

<script type="text/babel">
 
class Hello extends React.Component {
  render() {
    return (
    <div id="content">
    	<div className="hello1">
        	<p>Output from React</p>
    	</div>
        
  	     
    </div>
    
    );
  }
}
 
 
ReactDOM.render(
  <Hello />,
 
  document.getElementById('root')
);
    </script>
	 <?php echo '<p>Output from PHP</p>'; ?>
     

  </body>
</html>

		