
n,x=gets.split(" ").map &:to_i
m=n.times.map{gets.split.map(&:to_i)}

sum=m.inject(&:+)  #配列
result=sum.inject(&:+) #hairetu合計
avicii=x-result
number=sum.size
bad=sum.min

if(avicii>0)
  puts (avicii/bad)+number
else
  puts number
end
