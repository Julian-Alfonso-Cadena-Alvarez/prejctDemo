function secondLargesNumber(numbers){
    let first = numbers[0];
    let second = 0;
    for (let i = 0; i < numbers.length; i++) {

        if (numbers[i] > first) {
            second = first;
            first = numbers[i];
        }
        if(numbers[i]> second && numbers[i]<first){
            second = numbers[i];
        }
    }
    return second;
}
let nums =[4,5,2,5,7,4,9,8]

console.log("El segundo numero es: " + secondLargesNumber(nums));