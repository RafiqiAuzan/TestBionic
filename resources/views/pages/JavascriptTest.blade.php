<script>
function generatePattern(n) {
  for (let i = 1; i <= n; i++) {
    let pattern = '';

    for (let j = 1; j < i; j++) {
      pattern += j;
    }

    pattern += '**';

    for (let k = i + 1; k <= 8; k++) {
      pattern += k;
    }

    console.log(pattern);
  }
}
console.log('Soal Nomer 1')
console.log('n = 5 ->')
generatePattern(5);
console.log('')
console.log('n = 4 ->')
generatePattern(4)

function maxDifference(arr) {
    if (arr.length < 2) {
        return null;
    }

    let maxDiff = arr[1] - arr[0];
    let minElement = arr[0];

    for (let i = 1; i < arr.length; i++) {
        let diff = arr[i] - minElement;

        if (diff > maxDiff) {
            maxDiff = diff;
        }

        if (arr[i] < minElement) {
            minElement = arr[i];
        }
    }

    return maxDiff;
}


console.log('')
console.log('')
console.log('Soal Nomer 2')
let harga = [10, 7, 5, 8, 11, 9, 1];
let output3 = maxDifference(harga);
console.log(output3);
</script>