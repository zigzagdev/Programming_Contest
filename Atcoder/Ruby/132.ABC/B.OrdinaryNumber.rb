n=gets.to_i
p=gets.split(" ").map &:to_i

time=n-2
count=0

for i in(1..time)
  answer=[p[i-1],p[i],p[i+1]].sort
  if(answer[1]==p[i])
    count +=1
  end
end
p count

