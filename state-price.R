cal_stateprices <- function(rfree_return,market_return,market_sd,horizon){
  v = market_sd^2
  u = 1+market_return
  r <- 1+rfree_return
  # Mean and SD of stock return for one year asssuming a lognormal distribution
  logsd = sqrt(log(v/u^2+1))
  logm = 0.5*log(u^2/exp(logsd^2))
  # Approximation of the lognormal distribution with 100 discrete equally likely quantiles
  # Qnorm for investment horizont average return and sd on log scale
  logws <- qnorm(seq(0.005,0.995,0.01),horizon*logm,sqrt(horizon)*logsd)
  ws <- exp(logws)
  # calculte parameters for the log-linear relation between state price and wealth
  f <- function(x)  (r^horizon*sum(ws^x)-sum(ws^(x+1)))
  b <- uniroot(f, lower=-50, upper=50)$root
  a <- log(1/(sum(ws^(b+1))))
  # get state prices
  lps <- a+b*logws
  ps <- exp(lps)
  return(ps)
}

# example
args <- commandArgs(trailingOnly = TRUE)
cal_stateprices(args[0], args[1], args[2], args[3])