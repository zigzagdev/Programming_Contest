a,b=gets.split.map(&:to_s)

avicii=0
for i in a..b do
  if(i==i.reverse)
    avicii +=1
  end
end
puts avicii  
