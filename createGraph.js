// Using the above implemented graph class
var g = new Graph(n);
var vertices = ;// get all nama

// adding vertices
for (var i = 0; i < vertices.length; i++) {
	g.addVertex(vertices[i]);
}

// adding edges
for(var i =0; i< nama1.length;i++){
  g.addEdge(nama1,nama2 ,weight);
}


g.printGraph();// error

// create a graph class
class Graph {
	// defining vertex array and
	// adjacent list
	constructor(noOfVertices)
	{
		this.noOfVertices = noOfVertices;
		this.AdjList = new Map();
	}

	// functions to be implemented

	addVertex(v)
{
    // initialize the adjacent list with a
    // null array
    this.AdjList.set(v, []);
// add edge to the graph
addEdge(v, w, weight)// masukin weight?
{
	// get the list for vertex v and put the
	// vertex w denoting edge between v and w
	this.AdjList.get(v).push(w);

	// Since graph is undirected,
	// add an edge from w to v also
	this.AdjList.get(w).push(v);
}

// Prints the vertex and adjacency list
printGraph()
{
	// get all the vertices
	var get_keys = this.AdjList.keys();

	// iterate over the vertices
	for (var i of get_keys)
{
		// great the corresponding adjacency list
		// for the vertex
		var get_values = this.AdjList.get(i);
		var conc = "";

		// iterate over the adjacency list
		// concatenate the values into a string
		for (var j of get_values)
			conc += j + " ";

		// print the vertex and its adjacency list
		console.log(i + " -> " + conc);
	}
}



}
