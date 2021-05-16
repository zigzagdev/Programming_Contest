n,k=gets.split.map(&:to_i)
l=gets.split.map(&:to_i).sort.reverse

array=l[0..k-1]

p array.sum
