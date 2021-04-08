s=gets.chomp.to_s
i=1

array=[]
moji=s
moji.size.times{
  array << moji[i-moji.size]
  i+=1}
puts array.join
