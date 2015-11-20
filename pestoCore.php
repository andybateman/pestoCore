<html>
<head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<style>
html { margin-top:30px }
</style>
<meta name="viewport" content="width=device-width,initial-scale=0.8,maximum-scale=1" />
<title>Find yourself a Domain Name!</title>
</head>

<body>
<center><?php

$techTerms = array('AddOn', 'Algorithm', 'Architect', 'Array', 'Asynchronous', 'Avatar', 'Band', 'Base', 'Beta', 'Binary', 'Blog', 'Board', 'Boolean', 'Boot', 'Bot', 'Browser', 'Bug', 'Cache', 'Character', 'Checksum', 'Chip', 'Circuit', 'Client', 'Cloud', 'Cluster', 'Code', 'Codec', 'Coder', 'Column', 'Command', 'Compile', 'Compression', 'Computing', 'Console', 'Constant', 'Control', 'Cookie', 'Core', 'Cyber', 'Default', 'Deprecated', 'Dev', 'Developer', 'Development', 'Device', 'Digital', 'Domain', 'Dynamic', 'Emulation', 'Encryption', 'Engine', 'Error', 'Exception', 'Exploit', 'Export', 'Extension', 'File', 'Font', 'Fragment', 'Frame', 'Function', 'Group', 'Hacker', 'Hard', 'HTTP', 'Icon', 'Input', 'IT', 'Kernel', 'Key', 'Leak', 'Link', 'Load', 'Logic', 'Mail', 'Mashup', 'Mega', 'Meme', 'Memory', 'Meta', 'Mount', 'Navigation', 'Net', 'Node', 'Open', 'OS', 'Output', 'Over', 'Packet', 'Page', 'Parallel', 'Parse', 'Path', 'Phone', 'Ping', 'Pixel', 'Port', 'Power', 'Programmers', 'Programs', 'Protocol', 'Push', 'Query', 'Queue', 'Raw', 'Real', 'Repository', 'Restore', 'Root', 'Router', 'Run', 'Safe', 'Sample', 'Scalable', 'Script', 'Server', 'Session', 'Shell', 'Smart', 'Socket', 'Soft', 'Solid', 'Sound', 'Source', 'Streaming', 'Symfony', 'Syntax', 'System', 'Tag', 'Tape', 'Task', 'Template', 'Thread', 'Token', 'Tool', 'Tweak', 'URL', 'Utility', 'Viral', 'Volume', 'Ware', 'Web', 'Wiki', 'Window', 'Wire');

$culinaryTerms = array('Appetit', 'Bake', 'Beurre', 'Bistro', 'Blend', 'Boil', 'Bouchees', 'Brew', 'Buffet', 'Caffe', 'Caffeine', 'Cake', 'Carve', 'Caviar', 'Chef', 'Chocolate', 'Chop', 'Citrus', 'Cocoa', 'Compote', 'Cook', 'Cooker', 'Cookery', 'Cool', 'Core', 'Coulis', 'Course', 'Crouton', 'Cuisine', 'Dash', 'Dessert', 'Dip', 'Dish', 'Dress', 'Entree', 'Espresso', 'Extracts', 'Fajitas', 'Fibers', 'Fold', 'Formula', 'Fruit', 'Fumet', 'Fusion', 'Gastronomy', 'Glucose', 'Gourmet', 'Grains', 'Gratin', 'Greens', 'Guacamole', 'Herbs', 'Honey', 'Hybrid', 'Ice', 'Icing', 'Immersion', 'Induction', 'Instant', 'Jasmine', 'Jelly', 'Juice', 'Kiwi', 'Lean', 'Leek', 'Legumes', 'Lemon', 'Lime', 'Liqueur', 'Madeleine', 'Mango', 'Marinate', 'Melon', 'Mill', 'Mince', 'Mirepoix', 'Mix', 'Mousse', 'Muffin', 'Mull', 'Munster', 'Nectar', 'Nut', 'Olive', 'Organic', 'Organic', 'Pan', 'Papillote', 'Pare', 'Pasta', 'Pate', 'Peanut', 'Pear', 'Pesto', 'Picante', 'Pie', 'Pigment', 'Pinot', 'Plate', 'Plum', 'Pod', 'Prepare', 'Pressure', 'Pudding', 'Pulp', 'Quiche', 'Rack', 'Raft', 'Raisin', 'Rape', 'Recipe', 'Reduce', 'Relish', 'Render', 'Risotto', 'Rosemary', 'Roux', 'Rub', 'Salad', 'Salsa', 'Sauce', 'Sauté', 'Season', 'Slice', 'Smoked', 'Soft', 'Sorbet', 'Soup', 'Spaghetti', 'Specialty', 'Spicy', 'Splash', 'Steam', 'Stem', 'Sticky', 'Stuff', 'Sugar', 'Supreme', 'Sushi', 'Sweet', 'Table', 'Tart', 'Taste', 'Tasting', 'Tea', 'Tender', 'Terrine', 'Tomato', 'Vanilla', 'Wash', 'Wax', 'Wine', 'Wok', 'Zest');

if (!is_numeric(substr($_SERVER['REQUEST_URI'],strpos($_SERVER['REQUEST_URI'], '?')+1,1))) {
  $startup[] = str_replace('/', '',substr($_SERVER['REQUEST_URI'],strpos($_SERVER['REQUEST_URI'], '?')+1));
} else {
  for ($i=1; $i<=1; $i++)
    { $startup[] = 
      (mt_rand(1, 2) % 2 == 0 ?
       $culinaryTerms[array_rand($culinaryTerms)] . $techTerms[array_rand($techTerms)] :
       $techTerms[array_rand($techTerms)] . $culinaryTerms[array_rand($culinaryTerms)]);
    }
}
foreach ($startup as &$value)
  { echo("<h1>" . $value . ".com</h1>");
    if ( gethostbyname($value . ".com") != $value . ".com" )
    {  echo 'is Taken'; } else { echo 'is <a href="http://www.namecheap.com/domains/domain-name-search/results.aspx?aff=52845&domain='. $value .'.com&">Available</a>'; }    
  }
?>
<br />
<br />
<a href="pestoCore/?<?php echo(uniqid(rand(), true)); ?>" class="btn btn-primary btn-large">Another!</a>
</center>
</body>
</html>
