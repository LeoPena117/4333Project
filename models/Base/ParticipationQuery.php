<?php

namespace Base;

use \Participation as ChildParticipation;
use \ParticipationQuery as ChildParticipationQuery;
use \Exception;
use \PDO;
use Map\ParticipationTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'participation' table.
 *
 *
 *
 * @method     ChildParticipationQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildParticipationQuery orderByVotes cast($order = Criteria::ASC) Order by the Votes Cast column
 * @method     ChildParticipationQuery orderBySessions attended($order = Criteria::ASC) Order by the Sessions Attended column
 * @method     ChildParticipationQuery orderByCommitees($order = Criteria::ASC) Order by the Commitees column
 *
 * @method     ChildParticipationQuery groupById() Group by the ID column
 * @method     ChildParticipationQuery groupByVotes cast() Group by the Votes Cast column
 * @method     ChildParticipationQuery groupBySessions attended() Group by the Sessions Attended column
 * @method     ChildParticipationQuery groupByCommitees() Group by the Commitees column
 *
 * @method     ChildParticipationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildParticipationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildParticipationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildParticipationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildParticipationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildParticipationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildParticipation findOne(ConnectionInterface $con = null) Return the first ChildParticipation matching the query
 * @method     ChildParticipation findOneOrCreate(ConnectionInterface $con = null) Return the first ChildParticipation matching the query, or a new ChildParticipation object populated from the query conditions when no match is found
 *
 * @method     ChildParticipation findOneById(int $ID) Return the first ChildParticipation filtered by the ID column
 * @method     ChildParticipation findOneByVotes cast(int $Votes Cast) Return the first ChildParticipation filtered by the Votes Cast column
 * @method     ChildParticipation findOneBySessions attended(int $Sessions Attended) Return the first ChildParticipation filtered by the Sessions Attended column
 * @method     ChildParticipation findOneByCommitees(int $Commitees) Return the first ChildParticipation filtered by the Commitees column *

 * @method     ChildParticipation requirePk($key, ConnectionInterface $con = null) Return the ChildParticipation by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildParticipation requireOne(ConnectionInterface $con = null) Return the first ChildParticipation matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildParticipation requireOneById(int $ID) Return the first ChildParticipation filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildParticipation requireOneByVotes cast(int $Votes Cast) Return the first ChildParticipation filtered by the Votes Cast column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildParticipation requireOneBySessions attended(int $Sessions Attended) Return the first ChildParticipation filtered by the Sessions Attended column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildParticipation requireOneByCommitees(int $Commitees) Return the first ChildParticipation filtered by the Commitees column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildParticipation[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildParticipation objects based on current ModelCriteria
 * @method     ChildParticipation[]|ObjectCollection findById(int $ID) Return ChildParticipation objects filtered by the ID column
 * @method     ChildParticipation[]|ObjectCollection findByVotes cast(int $Votes Cast) Return ChildParticipation objects filtered by the Votes Cast column
 * @method     ChildParticipation[]|ObjectCollection findBySessions attended(int $Sessions Attended) Return ChildParticipation objects filtered by the Sessions Attended column
 * @method     ChildParticipation[]|ObjectCollection findByCommitees(int $Commitees) Return ChildParticipation objects filtered by the Commitees column
 * @method     ChildParticipation[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ParticipationQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ParticipationQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Participation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildParticipationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildParticipationQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildParticipationQuery) {
            return $criteria;
        }
        $query = new ChildParticipationQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildParticipation|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ParticipationTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ParticipationTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildParticipation A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Votes Cast, Sessions Attended, Commitees FROM participation WHERE ID = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildParticipation $obj */
            $obj = new ChildParticipation();
            $obj->hydrate($row);
            ParticipationTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildParticipation|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ParticipationTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ParticipationTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParticipationTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Votes Cast column
     *
     * Example usage:
     * <code>
     * $query->filterByVotes cast(1234); // WHERE Votes Cast = 1234
     * $query->filterByVotes cast(array(12, 34)); // WHERE Votes Cast IN (12, 34)
     * $query->filterByVotes cast(array('min' => 12)); // WHERE Votes Cast > 12
     * </code>
     *
     * @param     mixed $votes cast The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function filterByVotes cast($votes cast = null, $comparison = null)
    {
        if (is_array($votes cast)) {
            $useMinMax = false;
            if (isset($votes cast['min'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_VOTES CAST, $votes cast['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($votes cast['max'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_VOTES CAST, $votes cast['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParticipationTableMap::COL_VOTES CAST, $votes cast, $comparison);
    }

    /**
     * Filter the query on the Sessions Attended column
     *
     * Example usage:
     * <code>
     * $query->filterBySessions attended(1234); // WHERE Sessions Attended = 1234
     * $query->filterBySessions attended(array(12, 34)); // WHERE Sessions Attended IN (12, 34)
     * $query->filterBySessions attended(array('min' => 12)); // WHERE Sessions Attended > 12
     * </code>
     *
     * @param     mixed $sessions attended The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function filterBySessions attended($sessions attended = null, $comparison = null)
    {
        if (is_array($sessions attended)) {
            $useMinMax = false;
            if (isset($sessions attended['min'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_SESSIONS ATTENDED, $sessions attended['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sessions attended['max'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_SESSIONS ATTENDED, $sessions attended['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParticipationTableMap::COL_SESSIONS ATTENDED, $sessions attended, $comparison);
    }

    /**
     * Filter the query on the Commitees column
     *
     * Example usage:
     * <code>
     * $query->filterByCommitees(1234); // WHERE Commitees = 1234
     * $query->filterByCommitees(array(12, 34)); // WHERE Commitees IN (12, 34)
     * $query->filterByCommitees(array('min' => 12)); // WHERE Commitees > 12
     * </code>
     *
     * @param     mixed $commitees The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function filterByCommitees($commitees = null, $comparison = null)
    {
        if (is_array($commitees)) {
            $useMinMax = false;
            if (isset($commitees['min'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_COMMITEES, $commitees['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commitees['max'])) {
                $this->addUsingAlias(ParticipationTableMap::COL_COMMITEES, $commitees['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParticipationTableMap::COL_COMMITEES, $commitees, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildParticipation $participation Object to remove from the list of results
     *
     * @return $this|ChildParticipationQuery The current query, for fluid interface
     */
    public function prune($participation = null)
    {
        if ($participation) {
            $this->addUsingAlias(ParticipationTableMap::COL_ID, $participation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the participation table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ParticipationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ParticipationTableMap::clearInstancePool();
            ParticipationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ParticipationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ParticipationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ParticipationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ParticipationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ParticipationQuery