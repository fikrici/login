function productArray(arr, n )
{
	if (n == 1) {
		document.write("0");
		return;
	}

	var i, temp = 1;
	var prod = Array(n).fill(0);

	for (j = 0; j < n; j++)
		prod[j] = 1;

	for (i = 0; i < n; i++) {
		prod[i] = temp;
		temp *= arr[i];
	}
	temp = 1;

	for (i = n - 1; i >= 0; i--) {
		prod[i] *= temp;
		temp *= arr[i];
	}

	for (i = 0; i < n; i++)
		document.write(prod[i] + " ");

	return;
}

	var arr = [ 3,27,4,2 ];
	var n = arr.length;
	document.write("The product array is : ");
	productArray(arr, n);

